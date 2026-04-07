<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/adminOutsorcing', function () {
    return view('adminOutsorcing.dahsboard');
});


Route::get('/tamplate-adminOUT', function () {
    return view('adminOutsorcing.employee');
});

Route::get('/tamplate adminOUT', function () {
    return view('tamplate adminOUT.tamplate');
});

Route::get('/adminOutsorcing/karyawan', function () {
    return view('adminOutsorcing.karyawan');

});
Route::get('/superAdmin', function () {
    return view('superAdmin.dashboardAdmin');
});


