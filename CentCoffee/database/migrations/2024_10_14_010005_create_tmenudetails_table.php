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
        Schema::create('tmenudetails', function (Blueprint $table) {
            $table->char('kode_menu_detail', 15)->primary();
            $table->float('jumlah_bahan_baku_detail');
            $table->char('kode_menu', 15);
            $table->char('kode_bahan_baku', 15);
            $table->timestamps();

            $table->foreign('kode_menu')->references('kode_menu')->on('tmenus');
            $table->foreign('kode_bahan_baku')->references('kode_bahan_baku')->on('tbahanbakus');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tmenudetails');
    }
};
