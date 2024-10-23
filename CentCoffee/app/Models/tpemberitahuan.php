<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tpemberitahuan extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'kode_pemberitahuan', 
        'kode_perangkat',
        'isi_pemberitahuan', 
        'tanggal_pemberitahuan', 
        
    ];

    protected $primaryKey = 'kode_pemberitahuan';
    public $incrementing = false;
}
