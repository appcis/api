<?php

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

Auth::routes(['verify' => true]);

Route::namespace('App')->middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('blank');
    });

    Route::resource('/grade', 'GradeController')
        ->only(['index'])
        ->middleware('can:manage-grades');

});

