<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->integer('id_karyawan')->autoIncrement();
            $table->string('nama_lengkap', 100);
            $table->string('no_telp', 13);
            $table->string('NIP', 100);
            $table->string('email', 255);
            $table->string('password', 255);
            $table->string('alamat', 255);
            $table->date('tanggal_masuk')->nullable();
            $table->date('tanggal_keluar')->nullable();
            $table->string('username', 100);
            $table->enum('status', ['Aktif', 'Tidak aktif']);
            $table->integer('id_admin_vendor');
            $table->integer('id_kepala_dept');
            $table->timestamps();

            $table->foreign('id_admin_vendor', 'fk_admin_vendor')
                  ->references('id_admin_vendor')->on('admin_vendor')
                  ->onDelete('cascade')->onUpdate('cascade');
                  
            $table->foreign('id_kepala_dept', 'fk_kepala_departement')
                  ->references('id_departement')->on('kepala_departement')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
