<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('example', function () {
    return view('example');
});

Route::get('todo', function () {
    return view('todo');
});

Route::get('test', function () {
    return view('test');
});

Route::get('component', function () {
    return view('component');
});