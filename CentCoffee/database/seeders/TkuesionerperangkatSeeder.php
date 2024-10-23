<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tkuesionerPerangkat;
use Carbon\Carbon;

class TkuesionerperangkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kuesionerPerangkatData = [
            [
                'kode_kuisioner_perangkat' => 'KP001',
                'kode_perangkat' => 'PRK002', // Meja 1
                'pembeli_kuisioner_perangkat' => 'Andi', 
                'pesan_kuisioner_perangkat' => 'Pelayanannya ramah.',
                'tanggal_kuisioner_perangkat' => Carbon::now()->subDays(5),
                'waktu_kuisioner_perangkat' => '15:00:00',
                'status_kuisioner_perangkat' => 1, // Submitted
            ],
            [
                'kode_kuisioner_perangkat' => 'KP002',
                'kode_perangkat' => 'PRK003', // Meja 2
                'pembeli_kuisioner_perangkat' => 'Budi',
                'pesan_kuisioner_perangkat' => 'Makanannya enak!',
                'tanggal_kuisioner_perangkat' => Carbon::now()->subDays(10),
                'waktu_kuisioner_perangkat' => '12:30:00',
                'status_kuisioner_perangkat' => 1, 
            ],
            [
                'kode_kuisioner_perangkat' => 'KP003',
                'kode_perangkat' => 'PRK002', // Meja 1
                'pembeli_kuisioner_perangkat' => 'Cindy',
                'pesan_kuisioner_perangkat' => 'Suasana restorannya nyaman.',
                'tanggal_kuisioner_perangkat' => Carbon::now()->subDays(3),
                'waktu_kuisioner_perangkat' => '19:45:00',
                'status_kuisioner_perangkat' => 0, // Not submitted
            ],
        ];

        foreach ($kuesionerPerangkatData as $kuesionerPerangkat) {
            TkuesionerPerangkat::create($kuesionerPerangkat);
        }
    }
}