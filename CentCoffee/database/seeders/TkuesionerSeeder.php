<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tkuesioner;
use Carbon\Carbon;

class TkuesionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kuesionerData = [
            [
                'kode_kuisioner' => 'K001',
                'judul_kuisioner' => 'Kepuasan Pelanggan',
                'isi_kuisioner' => 'Bagaimana penilaian Anda terhadap pelayanan kami?',
                'tanggal_kuisioner' => Carbon::now()->subDays(7),
                'waktu_kuisioner' => '14:30:00',
                'status_kuisioner' => 1, // Active
                'kode_pegawai' => 'PG002', // Manajer Jane Smith
            ],
            [
                'kode_kuisioner' => 'K002',
                'judul_kuisioner' => 'Evaluasi Menu',
                'isi_kuisioner' => 'Berikan masukan Anda tentang menu kami.',
                'tanggal_kuisioner' => Carbon::now()->subMonth(),
                'waktu_kuisioner' => '10:00:00',
                'status_kuisioner' => 0, // Inactive
                'kode_pegawai' => 'PG002', // Manajer Jane Smith
            ],
        ];

        foreach ($kuesionerData as $kuesioner) {
            Tkuesioner::create($kuesioner);
        }
    }
}