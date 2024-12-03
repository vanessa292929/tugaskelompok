<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tmenudetail;

class TmenudetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menuDetailData = [
            // Nasi Goreng Spesial (MN001)
            [
                'kode_menu_detail' => 'MD001',
                'jumlah_bahan_baku_detail' => 20, // kg
                'kode_menu' => 'MN001',
                'kode_bahan_baku' => 'BB001', // Tepung Terigu
                'menu_terjual' => 50, // Menambahkan jumlah menu terjual
            ],
            [
                'kode_menu_detail' => 'MD002',
                'jumlah_bahan_baku_detail' => 10, // kg
                'kode_menu' => 'MN001',
                'kode_bahan_baku' => 'BB002', // Gula Pasir
                'menu_terjual' => 50,
            ],
            [
                'kode_menu_detail' => 'MD003',
                'jumlah_bahan_baku_detail' => 50, // butir
                'kode_menu' => 'MN001',
                'kode_bahan_baku' => 'BB003', // Telur Ayam
                'menu_terjual' => 50,
            ],
            [
                'kode_menu_detail' => 'MD004',
                'jumlah_bahan_baku_detail' => 20, // liter
                'kode_menu' => 'MN001',
                'kode_bahan_baku' => 'BB004', // Minyak Goreng
                'menu_terjual' => 50,
            ],

            // Mie Goreng Jawa (MN002)
            [
                'kode_menu_detail' => 'MD005',
                'jumlah_bahan_baku_detail' => 30, // kg
                'kode_menu' => 'MN002',
                'kode_bahan_baku' => 'BB001', // Tepung Terigu
                'menu_terjual' => 30,
            ],
            [
                'kode_menu_detail' => 'MD006',
                'jumlah_bahan_baku_detail' => 20, // kg
                'kode_menu' => 'MN002',
                'kode_bahan_baku' => 'BB002', // Gula Pasir
                'menu_terjual' => 30,
            ],
            [
                'kode_menu_detail' => 'MD007',
                'jumlah_bahan_baku_detail' => 50, // butir
                'kode_menu' => 'MN002',
                'kode_bahan_baku' => 'BB003', // Telur Ayam
                'menu_terjual' => 30,
            ],
            [
                'kode_menu_detail' => 'MD008',
                'jumlah_bahan_baku_detail' => 10, // liter
                'kode_menu' => 'MN002',
                'kode_bahan_baku' => 'BB004', // Minyak Goreng
                'menu_terjual' => 30,
            ],

            // Es Teh Manis (MN003)
            [
                'kode_menu_detail' => 'MD009',
                'jumlah_bahan_baku_detail' => 40, // kg
                'kode_menu' => 'MN003',
                'kode_bahan_baku' => 'BB002', // Gula Pasir
                'menu_terjual' => 70,
            ],

            // Jus Alpukat (MN004)
            [
                'kode_menu_detail' => 'MD010',
                'jumlah_bahan_baku_detail' => 35, // liter
                'kode_menu' => 'MN004',
                'kode_bahan_baku' => 'BB005', // Susu Cair
                'menu_terjual' => 35,
            ],
        ];

        foreach ($menuDetailData as $menuDetail) {
            // Pastikan untuk menambahkan data menggunakan updateOrCreate
            Tmenudetail::updateOrCreate(
                ['kode_menu_detail' => $menuDetail['kode_menu_detail']], // Menggunakan kode_menu_detail sebagai kunci unik
                $menuDetail // Data yang akan disisipkan
            );
        }
    }
}