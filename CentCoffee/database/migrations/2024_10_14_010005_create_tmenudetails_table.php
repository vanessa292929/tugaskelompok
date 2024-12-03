<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tmenudetails', function (Blueprint $table) {
            $table->char('kode_menu_detail', 15)->primary();
            $table->integer('jumlah_bahan_baku_detail');
            $table->char('kode_menu', 15); // Foreign key ke tmenus
            $table->char('kode_bahan_baku', 15); // Foreign key ke tbahanbakus
            $table->integer('menu_terjual')->default(0); 
            $table->timestamps();

            $table->foreign('kode_menu')->references('kode_menu')->on('tmenus')->onDelete('cascade');


            $table->foreign('kode_bahan_baku')
                ->references('kode_bahan_baku')
                ->on('tbahanbakus')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tmenudetails');
    }
};
