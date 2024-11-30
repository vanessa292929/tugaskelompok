<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tpengadaanbahanbaku;
use Carbon\Carbon;

class TpengadaanbahanbakuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data untuk tabel tpengadaanbahanbaku
        $pengadaanBahanBakuData = [
            [
                'kode_pengadaan_bahan_baku' => 'PBB001',
                'subjek_pengadaan_bahan_baku' => 'Pembelian Tepung Terigu',
                'tanggal_pengadaan_bahan_baku' => Carbon::now()->subDays(10)->format('Y-m-d'),
                'waktu_pengadaan_bahan_baku' => '10:00:00',
                'catatan_pengadaan_bahan_baku' => 'Membeli 50 kg tepung terigu dari Toko A',
                'status_pengadaan_bahan_baku' => 'Selesai',
                'kode_pegawai' => 'PG002', // Manajer Jane Smith
            ],
            [
                'kode_pengadaan_bahan_baku' => 'PBB002',
                'subjek_pengadaan_bahan_baku' => 'Pembelian Telur Ayam',
                'tanggal_pengadaan_bahan_baku' => Carbon::now()->subDays(5)->format('Y-m-d'),
                'waktu_pengadaan_bahan_baku' => '14:30:00',
                'catatan_pengadaan_bahan_baku' => 'Membeli 100 butir telur ayam dari Peternakan B',
                'status_pengadaan_bahan_baku' => 'Pending',
                'kode_pegawai' => 'PG002', // Manajer Jane Smith
            ],
        ];

        // Proses insert data langsung
        foreach ($pengadaanBahanBakuData as $pengadaanBahanBaku) {
            Tpengadaanbahanbaku::create($pengadaanBahanBaku);
        }
    }
}
