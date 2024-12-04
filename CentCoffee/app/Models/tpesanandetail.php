<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tpesanandetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_pesanan_detail',
        'kode_menu',
        'kode_pesanan',
        'jumlah_pesanan_detail',
        'status_pesanan_detail',
        'total_harga', 
    ];

    protected $primaryKey = 'kode_pesanan_detail';

    public $incrementing = false;

    /**
     * Relasi ke tabel Tmenu
     */
    public function menu()
    {
        return $this->belongsTo(Tmenu::class, 'kode_menu', 'kode_menu');
    }
}
