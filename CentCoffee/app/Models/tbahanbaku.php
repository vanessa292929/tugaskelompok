<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbahanbaku extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_bahan_baku',
        'nama_bahan_baku',
        'stok_bahan_baku',
        'satuan_bahan_baku',
        'tanggal_kadaluarsa_bahan_baku',
    ];

    protected $primaryKey = 'kode_bahan_baku';
    public $incrementing = false;
    public $timestamps = false;
}
