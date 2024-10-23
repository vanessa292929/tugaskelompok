<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tpesanan;
use Carbon\Carbon;

class TpesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pesananData = [
            [
                'kode_pesanan' => 'PSN001',
                'tanggal_pesanan' => Carbon::now()->subDays(3),
                'waktu_pesanan' => '12:00:00',
                'pembeli_pesanan' => 'Rani',
                'catatan_pesanan' => 'Tidak pakai pedas',
                'harga_pesanan' => 50000,
                'tunai_pesananan' => 100000,
                'status_pesanan' => 'P', // Assuming 'D' represents 'Selesai' (Done)
                'kode_pegawai' => 'PG003', // Kasir David Lee
                'kode_perangkat' => 'PRK001', // Kasir 1
            ],
            [
                'kode_pesanan' => 'PSN002',
                'tanggal_pesanan' => Carbon::now(),
                'waktu_pesanan' => '19:30:00',
                'pembeli_pesanan' => 'Rudi',
                'catatan_pesanan' => '', 
                'harga_pesanan' => 75000,
                'tunai_pesananan' => 100000,
                'status_pesanan' => 'D', // Assuming 'D' represents 'Selesai' (Done) 
                'kode_pegawai' => 'PG003', // Kasir David Lee
                'kode_perangkat' => 'PRK001', // Kasir 1
            ],
        ];

        foreach ($pesananData as $pesanan) {
            Tpesanan::create($pesanan);
        }
    }
}