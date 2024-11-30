<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tpesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_pesanan',        // Kode pesanan
        'nama_menu',           // Nama menu
        'tanggal_pesanan',     // Tanggal pesanan
        'waktu_pesanan',       // Waktu pesanan
        'pembeli_pesanan',     // Nama pembeli
        'catatan_pesanan',     // Catatan pesanan
        'harga_pesanan',       // Harga total pesanan
        'tunai_pesananan',     // Tunai yang diterima
        'status_pesanan',      // Status pesanan
        'kode_pegawai',        // Kode pegawai
    ];

    protected $primaryKey = 'kode_pesanan'; // Primary key tabel
    public $incrementing = false; // Non-auto increment untuk primary key
    public $timestamps = false;   // Tidak menggunakan kolom timestamps
}
