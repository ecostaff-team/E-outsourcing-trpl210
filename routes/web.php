<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


/* Route untuk logic */
Route::get('/', [AuthController::class, 'login'])->name('login');


/* Route Kepala departement */
Route::get('/kepala-departement/dashboard', function () {
    return view('kepala-departement.dashboard');
});

Route::get('/kepala-departemen/karyawan', function () {
    return view('kepala-departement.karyawan');
});

Route::get('/kepala-departemen/shift', function () {
    return view('kepala-departement.shift');
});

Route::get('/kepala-departemen/laporan', function () {
    return view('kepala-departement.cutiizin');
});

Route::get('/kepala-departemen/pengajuan', function () {
    return view('kepala-departement.pengajuanKaryawan');
});

Route::get('/kepala-departemen/pengaturan', function () {
    return view('kepala-departement.pengaturan');
});

/* Kepala departement seelesai */

Route::get('/admin-outsourcing', function () {
    return view('adminOutsourcing.dashboard');
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



Route::get('/cuti', function () {
    return view('kepala-departement.cutiizin');
});

Route::get('/pengaturan', function () {
    return view('kepala-departement.pengaturan');
});

