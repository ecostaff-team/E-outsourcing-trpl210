<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /* Tabel Admin Vendor Outsourcing */
    public function up(): void
    {
        Schema::create('admin_vendor', function (Blueprint $table) {
            $table->integer('id_admin_vendor')->autoIncrement();
            $table->timestamps();

            /* Relasi dengan tabel HR */
            $table->integer('hr_id');
            $table->foreign('hr_id')
            ->references('id_hr')->on('hr')
            ->onDelete('cascade')->onUpdate('cascade');

            /* Relasi dengan tabel User */
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id_user')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');

            /* Relasi dengan tabel Vendor */
            $table->integer('vendor_id');
            $table->foreign('vendor_id', 'berasal_dari_vendor')
                ->references('id_vendor')->on('vendor')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin_vendor');
    }
};
