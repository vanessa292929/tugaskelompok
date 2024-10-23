<?php
//DONE
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tpengadaanbahanbakudetil extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_pengadaan_bahan_baku_detil',
        'nama_bahan_baku',
        'nama_supplier',
        'jumlah_bahan_baku',
        'satuan_bahan_baku',
        'kode_pengadaan_bahan_baku'
    ];

    protected $primaryKey = 'kode_pengadaan_bahan_baku_detil';

    public $incrementing = false;


}
