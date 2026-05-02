<?php
namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Enums\UserRole;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


/**
 * Class User
 *
 * Model untuk merepresentasikan pengguna dalam sistem outsourcing.
 *
 * Digunakan untuk:
 * - Autentikasi login
 * - Manajemen role (super_admin, hr, karyawan, dll)
 * - Relasi ke semua user
 *
 * Catatan:
 * - Menggunakan primary key custom: id_user
 * - Default role: karyawan
 * - Default status: active
 *
 * @property int $id_user
 * @property string $nama_lengkap
 * @property string $email
 * @property string $username
 * @property string|null $nomor_tlp
 * @property UserRole $role
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
 */


/* Class user yang berfungsi untuk merepresentasikan pengguna */
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    /* nama table yang digunakan */
    protected $table = 'users';

    /* primary key */
    protected $primaryKey = 'id_user';

    /* auto increment */
    public $incrementing = true;

    /* tipe primary key */
    protected $keyType = 'int';

    /* data yang diperbolehkan untuk diambil dari database */
    protected $fillable = [
        'nama_lengkap',
        'email',
        'password',
        'nomor_tlp',
        'username',
        'role',
        'status',
    ];

    /* mengisi nilai default untuk atribut */
    protected $attributes = [
        'status' => 'active',
        'role' => UserRole::Karyawan->value,
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */

    /* data yang tidak diperbolehkan untuk serialisasi*/
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */


    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'role' => UserRole::class,
        ];
    }

    /* melakukan pengecekan role */
    public function isSuperAdmin():bool
    {
        return $this->role === UserRole::SuperAdmin;
    }

    public function isAdminVendor(): bool
    {
        return $this->role === UserRole::AdminVendor;
    }

    public function isKaryawan(): bool
    {
        return $this->role === UserRole::Karyawan;
    }

    public function isHr():bool
    {
        return $this->role === UserRole::Hr;
    }

    public function isKepalaDepartemen(): bool
    {
        return $this->role === UserRole::KepalaDepartemen;
    }


    /* relasi */
    /* relasi 1 karyawan dengan 1 user */
    public function karyawan()
    {
        return $this->hasOne(Karyawan::class, 'user_id', 'id_user');
    }

    /* relasi 1 kepala departemen 1 user */
    public function kepalaDepartemen()
    {
        return $this->hasOne(KepalaDepartemen::class, 'user_id', 'id_user');
    }

    /* relasi 1 admin vendor 1 user */
    public function adminVendor()
    {
        return $this->hasOne(AdminVendor::class, 'user_id', 'id_user');
    }

    /* relasi 1 super admin 1 user */
    public function superAdmin()
    {
        return $this->hasOne(SuperAdmin::class, 'user_id', 'id_user');
    }

    /* relasi 1 hr 1 user */
    public function hr()
    {
        return $this->hasOne(Hr::class, 'user_id', 'id_user');
    }
    /* end relasi */

    /* mengambil data berdasarkan role */
    public function roleData(): Model|null
    {
        return match ($this->role) {
            UserRole::Karyawan          => $this->karyawan()->first(),
            UserRole::Hr                => $this->hr()->first(),
            UserRole::AdminVendor       => $this->adminVendor()->first(),
            UserRole::SuperAdmin        => $this->superAdmin()->first(),
            UserRole::KepalaDepartemen  => $this->kepalaDepartemen()->first(),
            default                     => null,
        };
    }
}

