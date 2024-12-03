<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tmenudetail extends Model
{
    use HasFactory;

    // Menentukan nama tabel
    protected $table = 'tmenudetails';

    // Menentukan primary key
    protected $primaryKey = 'kode_menu_detail';

    // Menonaktifkan auto-increment pada primary key
    public $incrementing = false;

    // Menentukan tipe data primary key
    protected $keyType = 'char';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'kode_menu_detail',
        'jumlah_bahan_baku_detail',
        'kode_menu',
        'kode_bahan_baku',
        'menu_terjual', // Kolom baru
    ];

    /**
     * Relasi ke tabel Tmenu
     */
    public function menu()
    {
        return $this->belongsTo(Tmenu::class, 'kode_menu', 'kode_menu');
    }

    /**
     * Relasi ke tabel Tbahanbaku
     */
    public function bahanBaku()
    {
        return $this->belongsTo(Tbahanbaku::class, 'kode_bahan_baku', 'kode_bahan_baku');
    }
}
