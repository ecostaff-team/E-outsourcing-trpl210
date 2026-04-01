<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/adminOutsorcing', function () {
    return view('adminOutsorcing.dahsboard');
});

Route::get('/tamplate adminOUT', function () {
    return view('adminOutsorcing.employee');
});
