<?php
//DONE
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class totoritas extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kode_otoritas', 
        'nama_otoritas'
    ];

    protected $primaryKey = 'kode_otoritas';
    public $incrementing = false;
}
