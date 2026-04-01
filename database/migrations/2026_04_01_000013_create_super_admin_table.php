<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('super_admin', function (Blueprint $table) {
            $table->integer('id_admin')->autoIncrement();
            $table->string('nama', 255);
            $table->string('password', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('super_admin');
    }
};
