<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tperangkat;
use Illuminate\Support\Facades\Hash;


class TperangkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $perangkatData = [
            [
                'kode_perangkat' => 'PRK001',
                'kata_sandi_perangkat' => 'password123',
                'nama_perangkat' => 'Kasir 1',
                'jumlah_kursi_perangkat' => 0, // No chairs for cashier
                'status_perangkat' => 1, // Active
            ],
            [
                'kode_perangkat' => 'PRK002',
                'kata_sandi_perangkat' => 'meja1pass',
                'nama_perangkat' => 'Meja 1',
                'jumlah_kursi_perangkat' => 4,
                'status_perangkat' => 1, 
            ],
            [
                'kode_perangkat' => 'PRK003',
                'kata_sandi_perangkat' => 'meja2pass',
                'nama_perangkat' => 'Meja 2',
                'jumlah_kursi_perangkat' => 2,
                'status_perangkat' => 0, // Inactive
            ],
            [
                'kode_perangkat' => 'PRK004',
                'kata_sandi_perangkat' => 'dapur1pass',
                'nama_perangkat' => 'Dapur 1',
                'jumlah_kursi_perangkat' => 0, // No chairs in kitchen
                'status_perangkat' => 1, 
            ],
        ];

        foreach ($perangkatData as $perangkat) {
            Tperangkat::create($perangkat);
        }
    }
}