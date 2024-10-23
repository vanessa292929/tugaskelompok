<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thalaman extends Model
{
    protected $table = 'thalamans';
    use HasFactory;
    
    protected $fillable = [
        'kode_halaman', 
        'nama_halaman', 
        'ikon_halaman', 
        'urutan_halaman', 
    ];

    protected $primaryKey = 'kode_halaman';
    public $incrementing = false;

}
