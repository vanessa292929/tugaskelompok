<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tmenu;

class TmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menuData = [
            [
                'kode_menu' => 'MN001',
                'nama_menu' => 'Nasi Goreng Spesial',
                'jenis_menu' => 'F', 
                'harga_menu' => 25000,
                'deskripsi_menu' => 'Nasi goreng dengan telur, ayam, dan udang, disajikan dengan kerupuk dan acar.',
                'gambar_menu' => 'nasi_goreng.jpg', 
                'kode_pegawai' => 'PG004', // Koki Sarah Chen
            ],
            [
                'kode_menu' => 'MN002',
                'nama_menu' => 'Mie Goreng Jawa',
                'jenis_menu' => 'F',
                'harga_menu' => 22000,
                'deskripsi_menu' => 'Mie goreng dengan bumbu khas Jawa, disajikan dengan telur dan sayuran.',
                'gambar_menu' => 'mie_goreng.jpg',
                'kode_pegawai' => 'PG004', // Koki Sarah Chen
            ],
            [
                'kode_menu' => 'MN003',
                'nama_menu' => 'Es Teh Manis',
                'jenis_menu' => 'D',
                'harga_menu' => 5000,
                'deskripsi_menu' => 'Teh manis segar dengan es batu.',
                'gambar_menu' => 'es_teh.jpg',
                'kode_pegawai' => 'PG004', // Koki Sarah Chen 
            ],
            [
                'kode_menu' => 'MN004',
                'nama_menu' => 'Jus Alpukat',
                'jenis_menu' => 'D',
                'harga_menu' => 15000,
                'deskripsi_menu' => 'Jus alpukat segar dengan susu kental manis.',
                'gambar_menu' => 'jus_alpukat.jpg',
                'kode_pegawai' => 'PG004',  // Koki Sarah Chen
            ],
        ];

        foreach ($menuData as $menu) {
            Tmenu::create($menu);
        }
    }
}