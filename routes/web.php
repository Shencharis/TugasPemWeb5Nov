<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('layouts.home');
});

Route::get('/forms', function () {
    return view('layouts.forms');
});

Route::get('/table', function () {
    return view('layouts.table');
});

