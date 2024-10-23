<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tkuesionerdetail;

class TkuesionerdetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kuesionerDetailData = [
            // Kepuasan Pelanggan (K001)
            [
                'kode_kuisioner_detil' => 'KD001',
                'kode_kuisioner_perangkat' => 'KP001', // From TkuesionerPerangkatSeeder
                'kode_kuisioner' => 'K001',
                'poin_kuisioner_detil' => 4, 
            ],
            [
                'kode_kuisioner_detil' => 'KD002',
                'kode_kuisioner_perangkat' => 'KP002', // From TkuesionerPerangkatSeeder
                'kode_kuisioner' => 'K001',
                'poin_kuisioner_detil' => 5, 
            ],
            [
                'kode_kuisioner_detil' => 'KD003',
                'kode_kuisioner_perangkat' => 'KP003', // From TkuesionerPerangkatSeeder
                'kode_kuisioner' => 'K001',
                'poin_kuisioner_detil' => 3, 
            ],

            // Evaluasi Menu (K002)
            [
                'kode_kuisioner_detil' => 'KD004',
                'kode_kuisioner_perangkat' => 'KP001', // From TkuesionerPerangkatSeeder
                'kode_kuisioner' => 'K002',
                'poin_kuisioner_detil' => 4, 
            ],
            [
                'kode_kuisioner_detil' => 'KD005',
                'kode_kuisioner_perangkat' => 'KP002', // From TkuesionerPerangkatSeeder
                'kode_kuisioner' => 'K002',
                'poin_kuisioner_detil' => 5, 
            ],
        ];

        foreach ($kuesionerDetailData as $kuesionerDetail) {
            Tkuesionerdetail::create($kuesionerDetail);
        }
    }
}