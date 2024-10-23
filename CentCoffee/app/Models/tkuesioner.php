<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tkuesioner extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kode_kuisioner', 
        'judul_kuisioner', 
        'isi_kuisioner', 
        'tanggal_kuisioner', 
        'waktu_kuisioner', 
        'status_kuisioner', 
        'kode_pegawai'
    ];

    protected $primaryKey = 'kode_kuisioner';
    public $incrementing = false;
    public $timestamps = false;
}
