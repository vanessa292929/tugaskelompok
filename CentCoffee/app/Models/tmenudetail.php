<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tmenudetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_menu_detail',
        'jumlah_bahan_baku_detail',
        'kode_menu',
        'kode_bahan_baku',
    ];

    protected $primaryKey = 'kode_menu_detail';
    public $incrementing = false;
}
