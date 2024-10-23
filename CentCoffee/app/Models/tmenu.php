<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tmenu extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kode_menu', 
        'nama_menu', 
        'jenis_menu', 
        'harga_menu', 
        'deskripsi_menu', 
        'gambar_menu', 
        'kode_pegawai'
        
    ];
    protected $primaryKey = 'kode_menu';
    public $incrementing = false;
}
