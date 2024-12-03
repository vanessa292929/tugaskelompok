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
            // Detail untuk PSN001 (PG001)
            [
                'kode_pesanan_detail' => 'PD001',
                'kode_menu' => 'MN001', // Nasi Goreng Spesial
                'kode_pesanan' => 'PSN001',
                'jumlah_pesanan_detail' => 2,
                'status_pesanan_detail' => 'D',
                'total_harga' => 50000, // 2 * 25000
            ],
            [
                'kode_pesanan_detail' => 'PD002',
                'kode_menu' => 'MN003', // Es Teh Manis
                'kode_pesanan' => 'PSN001',
                'jumlah_pesanan_detail' => 1,
                'status_pesanan_detail' => 'D',
                'total_harga' => 5000, // 1 * 5000
            ],

            // Detail untuk PSN002 (PG002)
            [
                'kode_pesanan_detail' => 'PD003',
                'kode_menu' => 'MN002', // Mie Goreng Jawa
                'kode_pesanan' => 'PSN002',
                'jumlah_pesanan_detail' => 2,
                'status_pesanan_detail' => 'D',
                'total_harga' => 44000, // 2 * 22000
            ],
            [
                'kode_pesanan_detail' => 'PD004',
                'kode_menu' => 'MN004', // Jus Alpukat
                'kode_pesanan' => 'PSN002',
                'jumlah_pesanan_detail' => 1,
                'status_pesanan_detail' => 'D',
                'total_harga' => 15000, // 1 * 15000
            ],

            // Detail untuk PSN003 (PG003)
            [
                'kode_pesanan_detail' => 'PD005',
                'kode_menu' => 'MN003', // Es Teh Manis
                'kode_pesanan' => 'PSN003',
                'jumlah_pesanan_detail' => 3,
                'status_pesanan_detail' => 'D',
                'total_harga' => 15000, // 3 * 5000
            ],
            [
                'kode_pesanan_detail' => 'PD006',
                'kode_menu' => 'MN004', // Jus Alpukat
                'kode_pesanan' => 'PSN003',
                'jumlah_pesanan_detail' => 2,
                'status_pesanan_detail' => 'D',
                'total_harga' => 30000, // 2 * 15000
            ],

            // Detail untuk PSN004 (PG004)
            [
                'kode_pesanan_detail' => 'PD007',
                'kode_menu' => 'MN001', // Nasi Goreng Spesial
                'kode_pesanan' => 'PSN004',
                'jumlah_pesanan_detail' => 1,
                'status_pesanan_detail' => 'D',
                'total_harga' => 25000, // 1 * 25000
            ],

            // Detail untuk PSN005 (PG005)
            [
                'kode_pesanan_detail' => 'PD008',
                'kode_menu' => 'MN004', // Jus Alpukat
                'kode_pesanan' => 'PSN005',
                'jumlah_pesanan_detail' => 3,
                'status_pesanan_detail' => 'D',
                'total_harga' => 45000, // 3 * 15000
            ],

            // Detail untuk PSN006 (PG006)
            [
                'kode_pesanan_detail' => 'PD009',
                'kode_menu' => 'MN003', // Es Teh Manis
                'kode_pesanan' => 'PSN006',
                'jumlah_pesanan_detail' => 4,
                'status_pesanan_detail' => 'D',
                'total_harga' => 20000, // 4 * 5000
            ],

            // Detail untuk PSN007 (PG007)
            [
                'kode_pesanan_detail' => 'PD010',
                'kode_menu' => 'MN002', // Mie Goreng Jawa
                'kode_pesanan' => 'PSN007',
                'jumlah_pesanan_detail' => 2,
                'status_pesanan_detail' => 'D',
                'total_harga' => 44000, // 2 * 22000
            ],

            // Detail untuk PSN008 (PG008)
            [
                'kode_pesanan_detail' => 'PD011',
                'kode_menu' => 'MN004', // Jus Alpukat
                'kode_pesanan' => 'PSN008',
                'jumlah_pesanan_detail' => 2,
                'status_pesanan_detail' => 'D',
                'total_harga' => 30000, // 2 * 15000
            ],

            // Detail untuk PSN009 (PG009)
            [
                'kode_pesanan_detail' => 'PD012',
                'kode_menu' => 'MN001', // Nasi Goreng Spesial
                'kode_pesanan' => 'PSN009',
                'jumlah_pesanan_detail' => 1,
                'status_pesanan_detail' => 'D',
                'total_harga' => 25000, // 1 * 25000
            ],

            // Detail untuk PSN010 (PG010)
            [
                'kode_pesanan_detail' => 'PD013',
                'kode_menu' => 'MN003', // Es Teh Manis
                'kode_pesanan' => 'PSN010',
                'jumlah_pesanan_detail' => 1,
                'status_pesanan_detail' => 'D',
                'total_harga' => 5000, // 1 * 5000
            ],
            [
                'kode_pesanan_detail' => 'PD014',
                'kode_menu' => 'MN004', // Jus Alpukat
                'kode_pesanan' => 'PSN010',
                'jumlah_pesanan_detail' => 2,
                'status_pesanan_detail' => 'D',
                'total_harga' => 30000, // 2 * 15000
            ],
        ];

        foreach ($pesananDetailData as $pesananDetail) {
            Tpesanandetail::updateOrCreate(
                ['kode_pesanan_detail' => $pesananDetail['kode_pesanan_detail']],
                $pesananDetail
            );
        }
    }
}
