<?php
//DONE
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
        Schema::create('tpengadaanbahanbakudetils', function (Blueprint $table) {
            $table->char('kode_pengadaan_bahan_baku_detil')->primary();
            $table->char('kode_pengadaan_bahan_baku');
            $table->char('nama_bahan_baku', length:50);
            $table->char('nama_supplier', length:50);
            $table->float('jumlah_bahan_baku');
            $table->char('satuan_bahan_baku', length:10);
            
            $table->timestamps();


            $table->foreign('kode_pengadaan_bahan_baku')->references('kode_pengadaan_bahan_baku')->on('tpengadaanbahanbakus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpengadaanbahanbakudetils');
    }
};
