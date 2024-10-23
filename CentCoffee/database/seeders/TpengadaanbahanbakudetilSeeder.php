<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tpengadaanbahanbakudetil;

class TpengadaanbahanbakudetilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengadaanBahanBakuDetailData = [
            [
                'kode_pengadaan_bahan_baku_detil' => 'PBD001',
                'kode_pengadaan_bahan_baku' => 'PBB001', // From TpengadaanbahanbakuSeeder
                'nama_bahan_baku' => 'Tepung Terigu',
                'nama_supplier' => 'Toko A',
                'jumlah_bahan_baku' => 50.0,
                'satuan_bahan_baku' => 'kg',
            ],
            [
                'kode_pengadaan_bahan_baku_detil' => 'PBD002',
                'kode_pengadaan_bahan_baku' => 'PBB002', // From TpengadaanbahanbakuSeeder
                'nama_bahan_baku' => 'Telur Ayam',
                'nama_supplier' => 'Peternakan B',
                'jumlah_bahan_baku' => 100.0,
                'satuan_bahan_baku' => 'butir',
            ],
        ];

        foreach ($pengadaanBahanBakuDetailData as $pengadaanBahanBakuDetail) {
            Tpengadaanbahanbakudetil::create($pengadaanBahanBakuDetail);
        }
    }
}