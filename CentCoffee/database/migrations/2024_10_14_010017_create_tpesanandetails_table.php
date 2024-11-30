<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tpesanandetails', function (Blueprint $table) {
            $table->char('kode_pesanan_detail', 10)->primary();
            $table->char('kode_menu', 15); // Foreign key ke tmenus
            $table->char('kode_pesanan', 15); // Foreign key ke tpesanans
            $table->integer('jumlah_pesanan_detail');
            $table->enum('status_pesanan_detail', ['P', 'D']);
            $table->timestamps();

            $table->foreign('kode_menu')->references('kode_menu')->on('tmenus');
            $table->foreign('kode_pesanan')->references('kode_pesanan')->on('tpesanans');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tpesanandetails');
    }
};