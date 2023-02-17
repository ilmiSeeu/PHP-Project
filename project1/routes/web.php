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

//Applicants for phd candidates
Route::post('/applicants', [insertController::class, 'DataInsert']);
//this route has the name applicants, used in layout
Route::get('/applicants', [ApplicantController::class, 'index'])->name('applicants');

//When pressing import on the layout we will be sent to uploadfile
Route::post('/uploadFile', 'App\Http\Controllers\PagesController@uploadFile');


//send to the second form
Route::post('/form2-url', function () {
    return view('form2');
});
Route::get('/form2-url', 'App\Http\Controllers\insertController@index');

//when submited form2 we send to the final application
Route::post('/finalApplicants', [insertController::class, 'updateStatus']);

//When pressing edit we will be sent to form-url
Route::get('/form-url', function () {
    return view('form');
});
Route::post('/form-url', function (Request $request) {
    return view('form');
});

Route::get('/export', 'App\Http\Controllers\ExportController@export')->name('export');