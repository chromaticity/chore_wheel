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

// replace this root with a splash/landing page for the application... at least edit welcome.blade.php
Route::get('/', function () {
    return view('welcome');
});


// just for testing
Route::get('login', function() { return "test"; });