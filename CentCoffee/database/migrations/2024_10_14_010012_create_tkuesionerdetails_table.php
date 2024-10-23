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
        Schema::create('tkuesionerdetails', function (Blueprint $table) {
            $table->char('kode_kuisioner_detil', 10)->primary();
            $table->char('kode_kuisioner_perangkat', 10);
            $table->char('kode_kuisioner', 10);
            $table->tinyInteger('poin_kuisioner_detil');

            $table->timestamps();

            $table->foreign('kode_kuisioner_perangkat')->references('kode_kuisioner_perangkat')->on('tkuesionerperangkats');
            $table->foreign('kode_kuisioner')->references('kode_kuisioner')->on('tkuesioners');
            
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkuesionerdetails');
    }
};
