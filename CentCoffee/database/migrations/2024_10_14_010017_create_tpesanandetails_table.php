<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tpesanandetails', function (Blueprint $table) {
            $table->char('kode_pesanan_detail', 15)->primary();
            $table->char('kode_pesanan', 15); // Foreign key ke tpesanans
            $table->char('kode_menu', 15);    // Foreign key ke tmenus
            $table->integer('jumlah_pesanan_detail');
            $table->char('status_pesanan_detail', 1);
            $table->decimal('total_harga', 15, 2);
            $table->timestamps();

            $table->foreign('kode_pesanan')
                ->references('kode_pesanan')
                ->on('tpesanans')
                ->onDelete('cascade'); 

            $table->foreign('kode_menu')
                ->references('kode_menu')
                ->on('tmenus');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tpesanandetails');
    }
};
