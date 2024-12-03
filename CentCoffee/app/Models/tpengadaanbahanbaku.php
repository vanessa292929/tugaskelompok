<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tpengadaanbahanbaku extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_pengadaan_bahan_baku',
        'subjek_pengadaan_bahan_baku',
        'tanggal_pengadaan_bahan_baku',
        'waktu_pengadaan_bahan_baku',
        'catatan_pengadaan_bahan_baku',
        'status_pengadaan_bahan_baku',
        'jumlah_pengadaan', 
        'kode_pegawai',
        'kode_bahan_baku',
    ];

    protected $primaryKey = 'kode_pengadaan_bahan_baku';
    public $incrementing = false;
    public $timestamps = false;
}
