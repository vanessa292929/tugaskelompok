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
        Schema::create('tkuesioners', function (Blueprint $table) {
            $table->char('kode_kuisioner', 15)->primary();
            $table->char('judul_kuisioner', 50);
            $table->text('isi_kuisioner');
            $table->date('tanggal_kuisioner');
            $table->time('waktu_kuisioner');
            $table->tinyInteger('status_kuisioner')->default('1');
            $table->char('kode_pegawai', 15);


            $table->foreign('kode_pegawai')->references('kode_pegawai')->on('tpegawais');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkuesioners');
    }
};
