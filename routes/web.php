<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'FrontController@index')->name('front.index');
Route::get('/wse/get_company_stock', 'WseController@getCompanyStock')->name('wse.company_stock');
Route::get('/wse/get_company_stock_first', 'WseController@getCompanyStockFirst')->name('wse.company_stock_first');
Route::get('/wse/get_company_first', 'WseController@getCompaniesFirst')->name('wse.company_first');
Route::get('/wse/get_single_company', 'WseController@getSingleCompany')->name('wse.get_single_company');