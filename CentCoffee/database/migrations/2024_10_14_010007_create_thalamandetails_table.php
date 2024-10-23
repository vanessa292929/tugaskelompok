<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('thalamandetails', function (Blueprint $table) {
            $table->char('kode_halaman_detail', 15)->primary();
            $table->char('kode_otoritas', 15);
            $table->char('kode_halaman', 15);
            $table->tinyInteger('status_halaman_detail', false, true)->length(1);
            $table->timestamps();

            $table->foreign('kode_halaman')->references('kode_halaman')->on('thalamans');
            $table->foreign('kode_otoritas')->references('kode_otoritas')->on('totoritas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thalamandetails');
    }
};
