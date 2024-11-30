<?php

namespace Database\Seeders;

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
                'nama_menu' => 'Nasi Goreng Spesial',
                'tanggal_pesanan' => Carbon::now()->subDays(3)->format('Y-m-d'),
                'waktu_pesanan' => '12:00:00',
                'pembeli_pesanan' => 'Rani',
                'catatan_pesanan' => 'Tidak pakai pedas',
                'harga_pesanan' => 50000,
                'tunai_pesananan' => 100000, // Sesuaikan dengan kolom di tabel
                'status_pesanan' => 'P',
                'kode_pegawai' => 'PG003',
            ],
            [
                'kode_pesanan' => 'PSN002',
                'nama_menu' => 'Ayam Bakar Sambal',
                'tanggal_pesanan' => Carbon::now()->format('Y-m-d'),
                'waktu_pesanan' => '19:30:00',
                'pembeli_pesanan' => 'Rudi',
                'catatan_pesanan' => '', 
                'harga_pesanan' => 75000,
                'tunai_pesananan' => 100000, // Sesuaikan dengan kolom di tabel
                'status_pesanan' => 'D',
                'kode_pegawai' => 'PG003',
            ],
        ];

        foreach ($pesananData as $pesanan) {
            tpesanan::updateOrCreate(
                ['kode_pesanan' => $pesanan['kode_pesanan']],
                $pesanan
            );
        }
    }
}
