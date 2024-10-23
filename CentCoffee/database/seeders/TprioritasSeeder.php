<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tprioritas;

class TprioritasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prioritasData = [
            [
                'kode_prioritas' => 'PR001',
                'nama_prioritas' => 'Tinggi',
            ],
            [
                'kode_prioritas' => 'PR002',
                'nama_prioritas' => 'Sedang',
            ],
            [
                'kode_prioritas' => 'PR003',
                'nama_prioritas' => 'Rendah',
            ],
        ];

        foreach ($prioritasData as $prioritas) {
            Tprioritas::create($prioritas);
        }
    }
}