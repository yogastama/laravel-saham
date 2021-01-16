<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontController extends Controller
{
    protected $marketStack = 'http://api.marketstack.com/v1/eod?access_key=a7ec15eb5ea23f4520a14aaad2cbbb29';
    protected function changeApiLink($change){
        return $this->marketStack . $change;
    }
    public function index(Request $req){
        // berikan informasi kode perusahaan
        $link = $this->changeApiLink("&symbols=BBCA.XIDX&limit=100");
        // get dari api provider
        $response = Http::get($link);
        $linkClose = $this->changeApiLink("&symbols=BBCA.XIDX&limit=1");
        $data = [
            'response' => $response,
            'singleCompany' => Company::where('symbol', 'BBCA.XIDX')->first(),
            'closeDay' => Http::get($linkClose)->json()['data'][0]
        ];
        return view('front/index', $data);
    }
}
