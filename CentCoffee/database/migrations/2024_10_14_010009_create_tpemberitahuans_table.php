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
        Schema::create('tpemberitahuans', function (Blueprint $table) {
            $table->char('kode_pemberitahuan', 10)->primary();
            $table->char('kode_perangkat', 15);
            $table->text('isi_pemberitahuan');
            $table->dateTime('tanggal_pemberitahuan');

            $table->foreign('kode_perangkat')->references('kode_perangkat')->on('tperangkats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpemberitahuans');
    }
};
