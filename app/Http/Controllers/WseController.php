<?php

namespace App\Http\Controllers;

use App\Company;
use App\Exchange;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WseController extends Controller
{
    protected $marketStack = 'http://api.marketstack.com/v1';
    protected $appKeyStack = 'efc3197f8bb33316f8f86ee941e4ddf5';
    function __construct(){

    }
    protected function changeApiLink($change){
        return $this->marketStack . $change;
    }
    public function getCompanyStockFirst(Request $req){
        // berikan informasi kode perusahaan
        $link = $this->changeApiLink("/eod?access_key=$this->appKeyStack&symbols=" . $req->get('symbols') . '&limit=242&sort=ASC');
        // get dari api provider
        $response = Http::get($link);
        // return response
        if(!$req->get('wse')){
            return response()->json($response->json());
        }else{
            header('Content-Type: text/event-stream');
            header('Cache-Control: no-cache');
            echo "data: " . $response->body() . "\n\n";
            ob_flush();
            flush();
        }
    }
    public function getCompanyStock(Request $req){
        // Deklarasikan tipe header output
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        // berikan informasi kode perusahaan
        $link = $this->changeApiLink("/eod?access_key=$this->appKeyStack&symbols=" . $req->get('symbols'));
        // get dari api provider
        $response = Http::get($link);
        // return response
        echo "data: " . $response->body() . "\n\n";
        ob_flush();
        flush();
    }
    public function getCompaniesFirst(Request $req){
        // berikan informasi kode perusahaan
        $link = $this->changeApiLink("/tickers?access_key=$this->appKeyStack&exchange=" . $req->get('exchange') . '&offset=101&limit=600');
        // get dari api provider
        $response = Http::get($link);
        // return response
        foreach($response->json()['data'] as $val){
            $exchange = $val['stock_exchange'];
            $singleExchange = Exchange::where('mic', $exchange['mic'])->first();
            if(!$singleExchange){
                $exchange = new Exchange($exchange);
                $exchange->save();
                $val['exchanges_id'] = $exchange->id;
            }else{
                $val['exchanges_id'] = $singleExchange->id;
            }
            unset($val['stock_exchange']);
            $company = $val;
            $company = new Company($company);
            $company->save();
        }
        return response()->json($response->json());
    }
    public function getSingleCompany(Request $req){
        $companyCode = $req->get('symbol');
        $linkClose = $this->changeApiLink("/eod?access_key=$this->appKeyStack&symbols=$companyCode.XIDX&limit=1");
        $data = [
            'singleCompany' => Company::where('symbol', "$companyCode.XIDX")->first(),
            'closeDay' => Http::get($linkClose)->json()['data'][0]
        ];
        return response()->json($data);
    }
}
