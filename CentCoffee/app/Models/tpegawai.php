<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tpegawai extends Model
{
    use HasFactory;

    // Menentukan nama tabel
    protected $table = 'tpegawais';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'kode_pegawai',
        'kata_sandi',
        'nama_pegawai',
        'jenis_kelamin_pegawai',
        'menu_terbanyak', // Kolom baru yang nullable
    ];

    protected $primaryKey = 'kode_pegawai';

  
    public $incrementing = false;

    protected $keyType = 'char';
}
