<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tpesanandetail;

class TpesanandetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pesananDetailData = [
            // Pesanan Rani (PSN001)
            [
                'kode_pesanan_detail' => 'PD001',
                'kode_menu' => 'MN001', // Nasi Goreng Spesial
                'kode_pesanan' => 'PSN001',
                'jumlah_pesanan_detail' => 2,
                'status_pesanan_detail' => 'D', // Delivered
            ],
            [
                'kode_pesanan_detail' => 'PD002',
                'kode_menu' => 'MN003', // Es Teh Manis
                'kode_pesanan' => 'PSN001',
                'jumlah_pesanan_detail' => 1,
                'status_pesanan_detail' => 'D', // Delivered
            ],

            // Pesanan Rudi (PSN002)
            [
                'kode_pesanan_detail' => 'PD003',
                'kode_menu' => 'MN002', // Mie Goreng Jawa
                'kode_pesanan' => 'PSN002',
                'jumlah_pesanan_detail' => 1,
                'status_pesanan_detail' => 'P', // Pending
            ],
            [
                'kode_pesanan_detail' => 'PD004',
                'kode_menu' => 'MN004', // Jus Alpukat
                'kode_pesanan' => 'PSN002',
                'jumlah_pesanan_detail' => 2,
                'status_pesanan_detail' => 'P', // Pending
            ],
        ];

        foreach ($pesananDetailData as $pesananDetail) {
            Tpesanandetail::create($pesananDetail);
        }
    }
}