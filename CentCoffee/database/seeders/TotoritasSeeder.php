<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\totoritas; // Assuming you have this model

class TotoritasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $otoritasData = [
            [
                'kode_otoritas' => 'OT001',
                'nama_otoritas' => 'Administrator',
            ],
            [
                'kode_otoritas' => 'OT002',
                'nama_otoritas' => 'Manajer',
            ],
            [
                'kode_otoritas' => 'OT003',
                'nama_otoritas' => 'Kasir',
            ],
            [
                'kode_otoritas' => 'OT004',
                'nama_otoritas' => 'Koki',
            ],
            [
                'kode_otoritas' => 'OT005',
                'nama_otoritas' => 'Pelayan',
            ],
        ];

        foreach ($otoritasData as $otoritas) {
            Totoritas::create($otoritas);
        }
    }
}