<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tpemberitahuan;
use Carbon\Carbon;

class TpemberitahuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pemberitahuanData = [
            [
                'kode_pemberitahuan' => 'PB001',
                'kode_perangkat' => 'PRK001', // Kasir 1
                'isi_pemberitahuan' => 'Pesanan baru di Meja 2!',
                'tanggal_pemberitahuan' => Carbon::now()->subMinutes(15),
            ],
            [
                'kode_pemberitahuan' => 'PB002',
                'kode_perangkat' => 'PRK004', // Dapur 1
                'isi_pemberitahuan' => 'Pesanan Nasi Goreng Spesial untuk Meja 1!',
                'tanggal_pemberitahuan' => Carbon::now()->subHours(2),
            ],
            [
                'kode_pemberitahuan' => 'PB003',
                'kode_perangkat' => 'PRK002', // Meja 1
                'isi_pemberitahuan' => 'Pesanan Anda sedang disiapkan!',
                'tanggal_pemberitahuan' => Carbon::now()->subHours(3)->subMinutes(30),
            ],
        ];

        foreach ($pemberitahuanData as $pemberitahuan) {
            Tpemberitahuan::create($pemberitahuan);
        }
    }
}