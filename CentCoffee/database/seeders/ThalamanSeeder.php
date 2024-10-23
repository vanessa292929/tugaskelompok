<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\thalaman;

class ThalamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $halamanData = [
            [
                'kode_halaman' => 'HLM001',
                'nama_halaman' => 'Dashboard',
                'ikon_halaman' => 'heroicon-o-home',
                'urutan_halaman' => 1,
            ],
            [
                'kode_halaman' => 'HLM002',
                'nama_halaman' => 'Menu',
                'ikon_halaman' => 'heroicon-o-book-open',
                'urutan_halaman' => 2,
            ],
            [
                'kode_halaman' => 'HLM003',
                'nama_halaman' => 'Pesanan',
                'ikon_halaman' => 'heroicon-o-shopping-cart',
                'urutan_halaman' => 3,
            ],
            [
                'kode_halaman' => 'HLM004',
                'nama_halaman' => 'Bahan Baku',
                'ikon_halaman' => 'heroicon-o-archive',
                'urutan_halaman' => 4,
            ],
            [
                'kode_halaman' => 'HLM005',
                'nama_halaman' => 'Pegawai',
                'ikon_halaman' => 'heroicon-o-users',
                'urutan_halaman' => 5,
            ],
            [
                'kode_halaman' => 'HLM006',
                'nama_halaman' => 'Laporan',
                'ikon_halaman' => 'heroicon-o-chart-bar',
                'urutan_halaman' => 6,
            ],
        ];

        foreach ($halamanData as $halaman) {
            Thalaman::create($halaman);
        }
    }
}