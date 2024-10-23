<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\thalamandetail;

class ThalamandetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $halamanDetailData = [
            // Dashboard - accessible by all roles
            [
                'kode_halaman_detail' => 'HD001',
                'kode_otoritas' => 'OT001', // Administrator
                'kode_halaman' => 'HLM001',
                'status_halaman_detail' => 1, // Active
            ],
            [
                'kode_halaman_detail' => 'HD002',
                'kode_otoritas' => 'OT002', // Manajer
                'kode_halaman' => 'HLM001',
                'status_halaman_detail' => 1, 
            ],
            [
                'kode_halaman_detail' => 'HD003',
                'kode_otoritas' => 'OT003', // Kasir
                'kode_halaman' => 'HLM001',
                'status_halaman_detail' => 1, 
            ],
            [
                'kode_halaman_detail' => 'HD004',
                'kode_otoritas' => 'OT004', // Koki
                'kode_halaman' => 'HLM001',
                'status_halaman_detail' => 1, 
            ],
            [
                'kode_halaman_detail' => 'HD005',
                'kode_otoritas' => 'OT005', // Pelayan
                'kode_halaman' => 'HLM001',
                'status_halaman_detail' => 1, 
            ],

            // Menu - accessible by all roles
            // ... (similar entries for HLM002 as above)

            // Pesanan - accessible by all except Koki
            [
                'kode_halaman_detail' => 'HD011', 
                'kode_otoritas' => 'OT001', // Administrator
                'kode_halaman' => 'HLM003',
                'status_halaman_detail' => 1, 
            ],
            [
                'kode_halaman_detail' => 'HD012',
                'kode_otoritas' => 'OT002', // Manajer
                'kode_halaman' => 'HLM003',
                'status_halaman_detail' => 1, 
            ],
            [
                'kode_halaman_detail' => 'HD013',
                'kode_otoritas' => 'OT003', // Kasir
                'kode_halaman' => 'HLM003',
                'status_halaman_detail' => 1, 
            ],
            [
                'kode_halaman_detail' => 'HD014',
                'kode_otoritas' => 'OT005', // Pelayan
                'kode_halaman' => 'HLM003',
                'status_halaman_detail' => 1, 
            ],

            // Bahan Baku - accessible by Administrator and Manajer only
            [
                'kode_halaman_detail' => 'HD015',
                'kode_otoritas' => 'OT001', // Administrator
                'kode_halaman' => 'HLM004',
                'status_halaman_detail' => 1, 
            ],
            [
                'kode_halaman_detail' => 'HD016',
                'kode_otoritas' => 'OT002', // Manajer
                'kode_halaman' => 'HLM004',
                'status_halaman_detail' => 1, 
            ],

            // Pegawai - accessible by Administrator only
            [
                'kode_halaman_detail' => 'HD017',
                'kode_otoritas' => 'OT001', // Administrator
                'kode_halaman' => 'HLM005',
                'status_halaman_detail' => 1, 
            ],

            // Laporan - accessible by Administrator and Manajer only
            // ... (similar entries for HLM006 as Bahan Baku)
        ];

        foreach ($halamanDetailData as $halamanDetail) {
            Thalamandetail::create($halamanDetail);
        }
    }
}