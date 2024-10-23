<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tprioritas extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kode_prioritas', 
        'nama_prioritas'
    ];

    protected $primaryKey = 'kode_prioritas';
    public $incrementing = false;
}
