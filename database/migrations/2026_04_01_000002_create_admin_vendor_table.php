<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admin_vendor', function (Blueprint $table) {
            $table->integer('id_admin_vendor')->autoIncrement();
            $table->string('username', 100);
            $table->string('password', 255);
            $table->string('nama', 255);
            $table->enum('status', ['Aktif', 'Tidak_aktif']);
            $table->integer('asal_vendor');
            $table->timestamps();

            $table->foreign('asal_vendor', 'berasal_dari_vendor')
                  ->references('id_vendor')->on('vendor')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin_vendor');
    }
};
