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
            // Transaksi untuk PG001
            [
                'kode_pesanan' => 'PSN001',
                'nama_menu' => 'Nasi Goreng Spesial',
                'tanggal_pesanan' => Carbon::now()->subDays(5)->format('Y-m-d'),
                'waktu_pesanan' => '11:00:00',
                'pembeli_pesanan' => 'Rina',
                'catatan_pesanan' => 'Extra pedas',
                'harga_pesanan' => 25000,
                'tunai_pesananan' => 50000,
                'status_pesanan' => 'D',
                'kode_pegawai' => 'PG001',
            ],
            // Transaksi untuk PG002
            [
                'kode_pesanan' => 'PSN002',
                'nama_menu' => 'Mie Goreng Jawa',
                'tanggal_pesanan' => Carbon::now()->subDays(4)->format('Y-m-d'),
                'waktu_pesanan' => '12:30:00',
                'pembeli_pesanan' => 'Rudi',
                'catatan_pesanan' => '',
                'harga_pesanan' => 22000,
                'tunai_pesananan' => 50000,
                'status_pesanan' => 'D',
                'kode_pegawai' => 'PG002',
            ],
            // Transaksi untuk PG003
            [
                'kode_pesanan' => 'PSN003',
                'nama_menu' => 'Es Teh Manis',
                'tanggal_pesanan' => Carbon::now()->subDays(3)->format('Y-m-d'),
                'waktu_pesanan' => '15:00:00',
                'pembeli_pesanan' => 'Rani',
                'catatan_pesanan' => '',
                'harga_pesanan' => 5000,
                'tunai_pesananan' => 10000,
                'status_pesanan' => 'D',
                'kode_pegawai' => 'PG003',
            ],
            [
                'kode_pesanan' => 'PSN004',
                'nama_menu' => 'Jus Alpukat',
                'tanggal_pesanan' => Carbon::now()->subDays(2)->format('Y-m-d'),
                'waktu_pesanan' => '17:00:00',
                'pembeli_pesanan' => 'Maya',
                'catatan_pesanan' => '',
                'harga_pesanan' => 15000,
                'tunai_pesananan' => 20000,
                'status_pesanan' => 'D',
                'kode_pegawai' => 'PG003',
            ],
            // Transaksi untuk PG004
            [
                'kode_pesanan' => 'PSN005',
                'nama_menu' => 'Kopi Hitam',
                'tanggal_pesanan' => Carbon::now()->subDays(1)->format('Y-m-d'),
                'waktu_pesanan' => '08:00:00',
                'pembeli_pesanan' => 'Alex',
                'catatan_pesanan' => 'Gula sedikit',
                'harga_pesanan' => 10000,
                'tunai_pesananan' => 20000,
                'status_pesanan' => 'D',
                'kode_pegawai' => 'PG004',
            ],
            // Transaksi untuk PG005
            [
                'kode_pesanan' => 'PSN006',
                'nama_menu' => 'Teh Tarik',
                'tanggal_pesanan' => Carbon::now()->format('Y-m-d'),
                'waktu_pesanan' => '10:30:00',
                'pembeli_pesanan' => 'Lia',
                'catatan_pesanan' => '',
                'harga_pesanan' => 15000,
                'tunai_pesananan' => 30000,
                'status_pesanan' => 'D',
                'kode_pegawai' => 'PG005',
            ],
            // Transaksi untuk PG006
            [
                'kode_pesanan' => 'PSN007',
                'nama_menu' => 'Roti Bakar',
                'tanggal_pesanan' => Carbon::now()->format('Y-m-d'),
                'waktu_pesanan' => '18:00:00',
                'pembeli_pesanan' => 'Tina',
                'catatan_pesanan' => 'Tambah coklat',
                'harga_pesanan' => 20000,
                'tunai_pesananan' => 50000,
                'status_pesanan' => 'D',
                'kode_pegawai' => 'PG006',
            ],
            // Transaksi untuk PG007
            [
                'kode_pesanan' => 'PSN008',
                'nama_menu' => 'Lemon Tea',
                'tanggal_pesanan' => Carbon::now()->format('Y-m-d'),
                'waktu_pesanan' => '14:00:00',
                'pembeli_pesanan' => 'Rio',
                'catatan_pesanan' => '',
                'harga_pesanan' => 12000,
                'tunai_pesananan' => 20000,
                'status_pesanan' => 'D',
                'kode_pegawai' => 'PG007',
            ],
            // Transaksi untuk PG008
            [
                'kode_pesanan' => 'PSN009',
                'nama_menu' => 'Susu Kacang',
                'tanggal_pesanan' => Carbon::now()->format('Y-m-d'),
                'waktu_pesanan' => '19:00:00',
                'pembeli_pesanan' => 'Andi',
                'catatan_pesanan' => '',
                'harga_pesanan' => 10000,
                'tunai_pesananan' => 20000,
                'status_pesanan' => 'D',
                'kode_pegawai' => 'PG008',
            ],
            // Transaksi untuk PG009
            [
                'kode_pesanan' => 'PSN010',
                'nama_menu' => 'Cappuccino',
                'tanggal_pesanan' => Carbon::now()->format('Y-m-d'),
                'waktu_pesanan' => '20:00:00',
                'pembeli_pesanan' => 'Budi',
                'catatan_pesanan' => '',
                'harga_pesanan' => 30000,
                'tunai_pesananan' => 50000,
                'status_pesanan' => 'D',
                'kode_pegawai' => 'PG009',
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
