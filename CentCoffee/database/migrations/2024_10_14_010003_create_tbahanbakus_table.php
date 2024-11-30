<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbahanbakus', function (Blueprint $table) {
            $table->char('kode_bahan_baku', 15)->primary();
            $table->string('nama_bahan_baku', 50);
            $table->float('stok_bahan_baku');
            $table->string('satuan_bahan_baku', 10);
            $table->date('tanggal_kadaluarsa_bahan_baku');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbahanbakus');
    }
};
