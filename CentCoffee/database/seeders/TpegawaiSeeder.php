<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tpegawai;
use Illuminate\Support\Facades\Hash;

class TpegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pegawaiData = [
            [
                'kode_pegawai' => 'PG001',
                'kata_sandi' => 'admin123', 
                'nama_pegawai' => 'John Doe',
                'jenis_kelamin_pegawai' => 'L',
                'kode_otoritas' => 'OT001', // Administrator
            ],
            [
                'kode_pegawai' => 'PG002',
                'kata_sandi' => 'manager456',
                'nama_pegawai' => 'Jane Smith',
                'jenis_kelamin_pegawai' => 'P',
                'kode_otoritas' => 'OT002', // Manajer
            ],
            [
                'kode_pegawai' => 'PG003',
                'kata_sandi' => 'kasir789',
                'nama_pegawai' => 'David Lee',
                'jenis_kelamin_pegawai' => 'L',
                'kode_otoritas' => 'OT003', // Kasir
            ],
            [
                'kode_pegawai' => 'PG004',
                'kata_sandi' => 'koki101',
                'nama_pegawai' => 'Sarah Chen',
                'jenis_kelamin_pegawai' => 'P',
                'kode_otoritas' => 'OT004', // Koki
            ],
            [
                'kode_pegawai' => 'PG005',
                'kata_sandi' => 'pelayan112',
                'nama_pegawai' => 'Michael Kim',
                'jenis_kelamin_pegawai' => 'L',
                'kode_otoritas' => 'OT005', // Pelayan
            ],
        ];

        foreach ($pegawaiData as $pegawai) {
            Tpegawai::create($pegawai);
        }
    }
}