<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::view('/about', 'welcome');
Route::view('/main', 'main');
Route::get('/form-submit', 'App\Http\Controllers\HomeController@formsubmit');
Route::get('/page/{id?}', 'App\Http\Controllers\HomeController@page');
Route::get('/index{id?}','App\Http\Controllers\HomeController@index')->name('index');
Route::post('/insert','App\Http\Controllers\HomeController@insert')->name('insert');
Route::get('/update{id?}','App\Http\Controllers\HomeController@update')->name('update');
Route::get('/FinalUpdate{id?}','App\Http\Controllers\HomeController@FinalUpdate')->name('FinalUpdate');
Route::get('/delete{id?}','App\Http\Controllers\HomeController@delete')->name('delete');
