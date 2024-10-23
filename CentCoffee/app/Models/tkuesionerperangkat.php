<?php
//DONE 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tkuesionerperangkat extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'kode_kuisioner_perangkat', 
        'pembeli_kuisioner_perangkat', 
        'pesan_kuisioner_perangkat', 
        'tanggal_kuisioner_perangkat', 
        'waktu_kuisioner_perangkat', 
        'status_kuisioner_perangkat', 
        'kode_perangkat'
    ];

    protected $primaryKey = 'kode_kuisioner_perangkat';
    public $incrementing = false;
}
