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


/* ============================================================== */


/* Admin OutSourcing */

Route::get('/admin-outsourcing/dashboard', function () {
    return view('adminOutsourcing.dashboard');
});

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

/* super admin selesai */

/* ======================================================== */

/* Karyawan Outsourcing */

Route::get('/karyawanOutsourcing/dahsboard', function () {
    return view('karyawanOutsourcing.dashboardKaryawan');
});

Route::get('/karyawanOutsourcing/pengajuanKaryawan', function () {
    return view('karyawanOutsourcing.pengajuanKaryawan');
});

Route::get('/karyawanOutsourcing/jadwal-karyawan', function () {
    return view('karyawanOutsourcing.jadwalKaryawan');
});


