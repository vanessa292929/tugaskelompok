<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tpesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_pesanan',        
        'nama_menu',           
        'tanggal_pesanan',     
        'waktu_pesanan',       
        'pembeli_pesanan',     
        'catatan_pesanan',    
        'harga_pesanan',       
        'tunai_pesananan',     
        'status_pesanan',      
        'kode_pegawai',        
    ];

    protected $primaryKey = 'kode_pesanan'; 
    public $incrementing = false; 
    public $timestamps = false;   
}
