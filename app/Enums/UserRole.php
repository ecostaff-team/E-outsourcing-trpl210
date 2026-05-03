<?php
namespace App\Enums;

enum UserRole: string
{
    case SuperAdmin       = 'super_admin';
    case Hr               = 'hr';
    case Karyawan         = 'karyawan';
    case AdminVendor      = 'admin_vendor';
    case KepalaDepartemen = 'kepala_departemen';
}
