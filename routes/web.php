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

Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('layouts.master');
    });
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/categorias', 'CategoryController')->names('categories')->parameters(['categorias' => 'category'])->except('show');
    Route::resource('/editoras', 'PublishingCompanyController')->names('publishingCompanies')->parameters(['editoras' => 'publishingCompany'])->except('show');
});
