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
        Schema::create('tpegawais', function (Blueprint $table) {
            $table->char('kode_pegawai', 15)->primary();
            $table->char('kata_sandi', 100);
            $table->char('nama_pegawai', 50);
            $table->enum('jenis_kelamin_pegawai', ['L', 'P']);
            $table->char('kode_otoritas', 15);
            $table->timestamps();

            $table->foreign('kode_otoritas')->references('kode_otoritas')->on('totoritas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpegawais');
    }
};
