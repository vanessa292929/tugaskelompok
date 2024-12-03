<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tpengadaanbahanbaku;
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
                'kode_pengadaan_bahan_baku' => 'PBB003',
                'subjek_pengadaan_bahan_baku' => 'Pembelian Tepung Terigu',
                'tanggal_pengadaan_bahan_baku' => now()->subDays(10)->format('Y-m-d'),
                'waktu_pengadaan_bahan_baku' => '10:00:00',
                'catatan_pengadaan_bahan_baku' => 'Membeli 50 kg tepung terigu dari Toko A',
                'status_pengadaan_bahan_baku' => 'Selesai',
                'jumlah_pengadaan' => 100,
                'kode_pegawai' => 'PG002',
                'kode_bahan_baku' => 'BB001',
            ],
            [
                'kode_pengadaan_bahan_baku' => 'PBB004',
                'subjek_pengadaan_bahan_baku' => 'Pembelian Telur Ayam',
                'tanggal_pengadaan_bahan_baku' => now()->subDays(5)->format('Y-m-d'),
                'waktu_pengadaan_bahan_baku' => '14:30:00',
                'catatan_pengadaan_bahan_baku' => 'Membeli 100 butir telur ayam dari Peternakan B',
                'status_pengadaan_bahan_baku' => 'Pending',
                'jumlah_pengadaan' => 200,
                'kode_pegawai' => 'PG002',
                'kode_bahan_baku' => 'BB003',
            ],
            [
                'kode_pengadaan_bahan_baku' => 'PBB005',
                'subjek_pengadaan_bahan_baku' => 'Pembelian Minyak Goreng',
                'tanggal_pengadaan_bahan_baku' => now()->subDays(7)->format('Y-m-d'),
                'waktu_pengadaan_bahan_baku' => '12:00:00',
                'catatan_pengadaan_bahan_baku' => 'Membeli 20 liter minyak goreng dari Toko C',
                'status_pengadaan_bahan_baku' => 'Selesai',
                'jumlah_pengadaan' => 40,
                'kode_pegawai' => 'PG003',
                'kode_bahan_baku' => 'BB004',
            ],
            // Menambahkan data untuk gula pasir dengan jumlah pengadaan yang benar (200 kg)
            [
                'kode_pengadaan_bahan_baku' => 'PBB006',
                'subjek_pengadaan_bahan_baku' => 'Pembelian Gula Pasir',
                'tanggal_pengadaan_bahan_baku' => now()->subDays(3)->format('Y-m-d'),
                'waktu_pengadaan_bahan_baku' => '15:00:00',
                'catatan_pengadaan_bahan_baku' => 'Membeli 200 kg gula pasir dari Toko D',
                'status_pengadaan_bahan_baku' => 'Selesai',
                'jumlah_pengadaan' => 120,  // Mengubah jumlah pengadaan menjadi 200
                'kode_pegawai' => 'PG003',
                'kode_bahan_baku' => 'BB002',
            ],
            [
                'kode_pengadaan_bahan_baku' => 'PBB007',
                'subjek_pengadaan_bahan_baku' => 'Pembelian Susu Cair',
                'tanggal_pengadaan_bahan_baku' => now()->subDays(2)->format('Y-m-d'),
                'waktu_pengadaan_bahan_baku' => '13:00:00',
                'catatan_pengadaan_bahan_baku' => 'Membeli 50 liter susu cair dari Toko E',
                'status_pengadaan_bahan_baku' => 'Selesai',
                'jumlah_pengadaan' => 50,
                'kode_pegawai' => 'PG003',
                'kode_bahan_baku' => 'BB005',
            ],
        ];

        // Proses insert data dengan updateOrCreate untuk menghindari duplikat
        foreach ($pengadaanBahanBakuData as $pengadaanBahanBaku) {
            Tpengadaanbahanbaku::updateOrCreate(
                ['kode_pengadaan_bahan_baku' => $pengadaanBahanBaku['kode_pengadaan_bahan_baku']], // Menggunakan kode_pengadaan_bahan_baku sebagai kunci unik
                $pengadaanBahanBaku // Data yang akan disisipkan atau diperbarui
            );
        }
    }
}
