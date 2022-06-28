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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user_enter', function () {
    return view('user_enter');
});

Route::get('/user_reg', function () {
    return view('user_reg');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/home-page', function () {
    return view('home-page');
});

Route::get('/fetch_record', function () {
    return view('fetch_record');
});

Route::get('/update_record', function () {
    return view('update_record');
});

Route::get('/update', function () {
    return view('update');
});

Route::get('/updated', function () {
    return view('updated');
});

Route::get('/delete_record', function () {
    return view('delete_record');
});

Route::get('/delete', function () {
    return view('delete');
});

Route::get('/style', function () {
    return view('style');
});