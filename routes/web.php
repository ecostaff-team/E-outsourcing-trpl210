<?php

use App\Http\Controllers\AdminOutsourcingController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


/* Route untuk logic */
Route::get('/', [AuthController::class, 'login'])->name('login');


/* Route Kepala departement */
Route::get('/kepala-departement/dashboard', function () {
    return view('kepala-departement.dashboard');
});

Route::get('/kepala-departement/karyawan', function () {
    return view('kepala-departement.karyawan');
});

Route::get('/kepala-departement/shift', function () {
    return view('kepala-departement.shift');
});

Route::get('/kepala-departement/laporan', function () {
    return view('kepala-departement.cutiizin');
});

Route::get('/kepala-departement/pengajuan', function () {
    return view('kepala-departement.pengajuanKaryawan');
});

/* Kepala departement seelesai */


/* ============================================================== */


/* Admin OutSourcing */

Route::get('/admin-outsourcing/dashboard',  [AdminOutsourcingController::class, 'dashboard']);

Route::get('/admin-outsourcing/pengajuan-karyawan', function () {
    return view('adminOutsourcing.pengajuanKaryawan');
});

Route::get('/admin-outsourcing/kelola-karyawan', function () {
    return view('adminOutsourcing.kelola-karyawan');
});

/* Admin OutSourcing */

/* ============================================================ */

/* USER HR */

Route::get('/hr/dashboard', function () {
    return view('hr.dashboard');
});

Route::get('/hr/rekapan-detail', function () {
    return view('hr.rekapanDetail');
});

Route::get('/hr/ajuan-data-karyawan', function () {
    return view('hr.ajuanDataKaryawan');
});

Route::get('/hr/data-karyawan', function () {
    return view('hr.dataKaryawan');
});

/* USER HR SELESAI*/

/* ======================================================================== */

/* Super Admin */

Route::get('/super-admin/dashboard', function () {
    return view('superAdmin.dashboardAdmin');
});

Route::get('/super-admin/pengaturan', function () {
    return view('superAdmin.pengaturanAdmin');
});

/* super admin selesai */

/* ======================================================== */

/* Karyawan Outsourcing */

Route::get('/karyawan-outsourcing/dashboard', function () {
    return view('karyawanOutsourcing.dashboardKaryawan');
});

Route::get('/karyawan-outsourcing/pengajuanKaryawan', function () {
    return view('karyawanOutsourcing.pengajuanKaryawan');
});

Route::get('/karyawan-outsourcing/jadwal-karyawan', function () {
    return view('karyawanOutsourcing.jadwalKaryawan');
});

Route::get('/karyawan-outsourcing/perizinan-karyawan', function () {
    return view('karyawanOutsourcing.perizinan');
});


