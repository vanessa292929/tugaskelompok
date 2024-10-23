<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tkuesionerdetail extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kode_kuisioner_detil', 
        'kode_kuisioner_perangkat', 
        'kode_kuisioner',
        'poin_kuisioner_detil', 


    ];

    protected $primaryKey = 'kode_kuisioner_detil';
    public $incrementing = false;
}
