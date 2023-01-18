<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\insertController;
use App\Http\Controllers\ApplicantController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/finalApplicants', 'App\Http\Controllers\insertController@index');


Route::post('/applicants', [insertController::class, 'DataInsert']);
Route::get('/applicants', [ApplicantController::class, 'index'])->name('applicants');




Route::post('/uploadFile', 'App\Http\Controllers\PagesController@uploadFile');


Route::get('/form-url', function () {
    return view('form');
});
Route::post('/form-url', function (Request $request) {
    return view('form');
});