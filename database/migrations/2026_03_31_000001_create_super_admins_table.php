<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    /* Tabel Super Admin dengan relasi ke tabel user */
    public function up(): void
    {
        Schema::create('super_admin', function (Blueprint $table) {
            $table->integer('id_admin')->autoIncrement();
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id_user')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('super_admin');
    }
};
