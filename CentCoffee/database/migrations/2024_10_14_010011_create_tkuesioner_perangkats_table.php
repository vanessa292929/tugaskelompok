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
        Schema::create('tkuesionerperangkats', function (Blueprint $table) {
            $table->char('kode_kuisioner_perangkat', 10)->primary();
            $table->char('kode_perangkat', 15);
            $table->char('pembeli_kuisioner_perangkat', 50);
            
            $table->text('pesan_kuisioner_perangkat');
            $table->date('tanggal_kuisioner_perangkat');
            $table->time('waktu_kuisioner_perangkat');
            $table->tinyInteger('status_kuisioner_perangkat')->default(1);
            
            


            $table->foreign('kode_perangkat')->references('kode_perangkat')->on('tperangkats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkuesionerperangkats');
    }
};
