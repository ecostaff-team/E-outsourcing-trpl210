<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::livewire('/post/create', 'pages::post.create');

Route::get('/adminOutsorcing', function () {
    return view('adminOutsorcing.dahsboard');
});

Route::get('/tamplate adminOUT', function () {
    return view('tamplate adminOUT.tamplate');
});

Route::get('/adminOutsorcing/karyawan', function () {
    return view('adminOutsorcing.karyawan');
});

Route::get('/adminOutsorcing/pengaturan', function () {
    return view('adminOutsorcing.pengaturan');
});
