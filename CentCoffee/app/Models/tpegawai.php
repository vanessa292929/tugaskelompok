<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tpegawai extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kode_pegawai', 
        'kata_sandi', 
        'nama_pegawai', 
        'jenis_kelamin_pegawai', 
        'kode_otoritas'
    ];

    protected $primaryKey = 'kode_pegawai';
    public $incrementing = false;
}
