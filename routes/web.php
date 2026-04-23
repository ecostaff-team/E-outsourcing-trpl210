<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin-outsourcing', function () {
    return view('adminOutsourcing.dashboard');
});

Route::get('/admin-outsorcing/karyawan', function () {
    return view('adminOutsourcing.karyawan');
});

Route::get('/pengajuan-karyawan', function () {
    return view('adminOutsourcing.pengajuanKaryawan');
});

Route::get('/superAdmin', function () {
    return view('superAdmin.dashboardAdmin');
});
Route::get('/karyawanOutsourcing', function () {
    return view('karyawanOutsourcing.dashboardKaryawan');
<<<<<<< HEAD
});
Route::get('/karyawanOutsourcing/jadwal-karyawan', function () {
    return view('karyawanOutsourcing.jadwalKaryawan');
});
=======
}); 
>>>>>>> 82d2c24550c4daf5e49e94d50bce0a085c379854
