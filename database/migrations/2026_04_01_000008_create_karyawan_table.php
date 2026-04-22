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
            $table->string('NIP', 100);
            $table->string('alamat', 255);
            $table->date('tanggal_masuk')->nullable();
            $table->date('tanggal_keluar')->nullable();
            $table->integer('admin_vendor_id');
            $table->integer('kepala_dept_id');
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('admin_vendor_id', 'fk_admin_vendor')
                  ->references('id_admin_vendor')->on('admin_vendor')
                  ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('kepala_dept_id', 'fk_kepala_departement')
                  ->references('id_departement')->on('kepala_departement')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
