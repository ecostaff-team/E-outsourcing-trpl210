<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'login'])->name('login');

Route::get('/kepala-departemen/dashboard', function () {
    return view('livewire.dashboard');
});

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

Route::get('/kepala-departemen/karyawan', function () {
    return view('kepala-departement.karyawan');
});

Route::get('/karyawan', function () {
    return view('karyawan.dashboard');
});


