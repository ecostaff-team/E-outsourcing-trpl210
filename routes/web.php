<?php

use Illuminate\Support\Facades\Route;
/* LOGINNN */
//use App\Livewire\Auth\Login;

//Route::post('/login', Login::class)->name('login');
/* SELSAI LOGIN */

//Route::livewire('/post/create', 'pages::post.create');

// Route::get('/', Login::class)->name('login');

use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'login'])->name('login');



Route::get('/admin-outsourcing', function () {
    return view('adminOutsourcing.dashboard');
});

Route::get('/admin-outsourcing/karyawan', function () {
    return view('adminOutsourcing.karyawan');
});

Route::get('/pengajuan-karyawan', function () {
    return view('adminOutsourcing.pengajuanKaryawan');
});

Route::get('/user-hr', function () {
    return view('hr.dashboard');
});

Route::get('/user-hr/rekapan-detail', function () {
    return view('hr.rekapanDetail');
});

Route::get('/user-hr/ajuan-data-karyawan', function () {
    return view('hr.ajuanDataKaryawan');
});

Route::get('/user-hr/data-karyawan', function () {
    return view('hr.dataKaryawan');
});

Route::get('/super-admin', function () {
    return view('superAdmin.dashboardAdmin');
});

Route::get('/kepala-departemen', function () {
    return view('kepala-departement.dashboard');
});

Route::get('/karyawan', function () {
    return view('karyawan.dashboard');
});


