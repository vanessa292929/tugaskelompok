<?php
// DONE
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
        Schema::create('tperangkats', function (Blueprint $table) {
            $table->char('kode_perangkat', 15) -> primary();
            $table->char('kata_sandi_perangkat', 150);
            $table->char('nama_perangkat', 50);
            $table->tinyInteger('jumlah_kursi_perangkat');
            $table->tinyInteger('status_perangkat')->default('0');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tperangkats');
    }
};
