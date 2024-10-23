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
        Schema::create('thalamans', function (Blueprint $table) {
            $table->char('kode_halaman', 15)->primary();
            $table->char('nama_halaman', 50);
            $table->char('ikon_halaman', 25);
            $table->tinyInteger('urutan_halaman', false, true)->length(2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thalamans');
    }
};
