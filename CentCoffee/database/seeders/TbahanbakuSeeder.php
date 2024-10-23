<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tbahanbaku;
use Carbon\Carbon;

class TbahanbakuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bahanBakuData = [
            [
                'kode_bahan_baku' => 'BB001',
                'nama_bahan_baku' => 'Tepung Terigu',
                'stok_bahan_baku' => 50.0,
                'satuan_bahan_baku' => 'kg',
                'tanggal_kadaluarsa_bahan_baku' => Carbon::now()->addMonths(6), 
            ],
            [
                'kode_bahan_baku' => 'BB002',
                'nama_bahan_baku' => 'Gula Pasir',
                'stok_bahan_baku' => 25.0,
                'satuan_bahan_baku' => 'kg',
                'tanggal_kadaluarsa_bahan_baku' => Carbon::now()->addMonths(12),
            ],
            [
                'kode_bahan_baku' => 'BB003',
                'nama_bahan_baku' => 'Telur Ayam',
                'stok_bahan_baku' => 100.0,
                'satuan_bahan_baku' => 'butir',
                'tanggal_kadaluarsa_bahan_baku' => Carbon::now()->addWeeks(3),
            ],
            [
                'kode_bahan_baku' => 'BB004',
                'nama_bahan_baku' => 'Minyak Goreng',
                'stok_bahan_baku' => 10.0,
                'satuan_bahan_baku' => 'liter',
                'tanggal_kadaluarsa_bahan_baku' => Carbon::now()->addMonths(9),
            ],
            [
                'kode_bahan_baku' => 'BB005',
                'nama_bahan_baku' => 'Susu Cair',
                'stok_bahan_baku' => 15.0,
                'satuan_bahan_baku' => 'liter',
                'tanggal_kadaluarsa_bahan_baku' => Carbon::now()->addMonths(2),
            ],
        ];

        foreach ($bahanBakuData as $bahanBaku) {
            Tbahanbaku::create($bahanBaku);
        }
    }
}