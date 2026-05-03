<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->integer('id_jadwal')->autoIncrement();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->date('tanggal');
            $table->integer('dibuat_oleh');
            $table->timestamps();

            $table->integer('shift_id');
            $table->foreign('shift_id', 'jadwa_diatur_shift')
                ->references('id_shift')->on('shift')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};
