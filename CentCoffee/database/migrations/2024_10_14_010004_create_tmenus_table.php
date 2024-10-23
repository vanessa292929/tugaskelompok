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
        Schema::create('tmenus', function (Blueprint $table) {
            $table->char('kode_menu', 15)->primary();
            $table->char('nama_menu', 50);
            $table->enum('jenis_menu', ['F', 'D']);
            $table->integer('harga_menu');
            $table->text('deskripsi_menu');
            $table->char('gambar_menu');
            $table->char('kode_pegawai', 15);
            $table->timestamps();

            $table->foreign('kode_pegawai')->references('kode_pegawai')->on('tpegawais');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tmenus');
    }
};
