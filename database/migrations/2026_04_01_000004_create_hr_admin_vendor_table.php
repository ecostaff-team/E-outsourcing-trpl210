<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hr_admin_vendor', function (Blueprint $table) {
            $table->integer('id_relasi')->autoIncrement();
            $table->integer('id_hr');
            $table->integer('id_admin_vendor');
            $table->timestamps();

            $table->foreign('id_hr', 'relasi_hr')
                  ->references('id_hr')->on('hr')
                  ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('id_admin_vendor', 'relasi_admin_vendor')
                  ->references('id_admin_vendor')->on('admin_vendor')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hr_admin_vendor');
    }
};
