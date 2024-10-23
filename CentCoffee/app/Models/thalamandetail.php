<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thalamandetail extends Model
{
    use HasFactory;
    protected $fillable = ['kode_halaman_detail','kode_otoritas','kode_halaman','status_halaman_detail']; 

    protected $primaryKey = 'kode_halaman_detail';
    public $incrementing = false;
}
