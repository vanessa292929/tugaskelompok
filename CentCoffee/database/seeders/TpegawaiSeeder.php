<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tpegawai;

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
                'menu_terbanyak' => 'Nasi Goreng Spesial',
            ],
            [
                'kode_pegawai' => 'PG002',
                'kata_sandi' => 'manager456',
                'nama_pegawai' => 'Jane Smith',
                'jenis_kelamin_pegawai' => 'P',
                'menu_terbanyak' => 'Mie Goreng Jawa',
            ],
            [
                'kode_pegawai' => 'PG003',
                'kata_sandi' => 'kasir789',
                'nama_pegawai' => 'David Lee',
                'jenis_kelamin_pegawai' => 'L',
                'menu_terbanyak' => 'Es Teh Manis',
            ],
            [
                'kode_pegawai' => 'PG004',
                'kata_sandi' => 'koki101',
                'nama_pegawai' => 'Sarah Chen',
                'jenis_kelamin_pegawai' => 'P',
                'menu_terbanyak' => 'Jus Alpukat',
            ],
            [
                'kode_pegawai' => 'PG005',
                'kata_sandi' => 'pelayan112',
                'nama_pegawai' => 'Michael Kim',
                'jenis_kelamin_pegawai' => 'L',
                'menu_terbanyak' => 'Kopi Hitam',
            ],
            [
                'kode_pegawai' => 'PG006',
                'kata_sandi' => 'logistik123',
                'nama_pegawai' => 'Emily Davis',
                'jenis_kelamin_pegawai' => 'P',
                'menu_terbanyak' => 'Teh Tarik',
            ],
            [
                'kode_pegawai' => 'PG007',
                'kata_sandi' => 'supervisor456',
                'nama_pegawai' => 'Robert Wilson',
                'jenis_kelamin_pegawai' => 'L',
                'menu_terbanyak' => 'Roti Bakar',
            ],
            [
                'kode_pegawai' => 'PG008',
                'kata_sandi' => 'operator321',
                'nama_pegawai' => 'Anna Taylor',
                'jenis_kelamin_pegawai' => 'P',
                'menu_terbanyak' => 'Lemon Tea',
            ],
            [
                'kode_pegawai' => 'PG009',
                'kata_sandi' => 'asisten654',
                'nama_pegawai' => 'Tom Brown',
                'jenis_kelamin_pegawai' => 'L',
                'menu_terbanyak' => 'Susu Kacang',
            ],
            [
                'kode_pegawai' => 'PG010',
                'kata_sandi' => 'teknisi987',
                'nama_pegawai' => 'Sophia Anderson',
                'jenis_kelamin_pegawai' => 'P',
                'menu_terbanyak' => 'Cappuccino',
            ],
        ];

        // Pastikan data baru diinsert tanpa duplikasi
        foreach ($pegawaiData as $pegawai) {
            Tpegawai::updateOrCreate(
                ['kode_pegawai' => $pegawai['kode_pegawai']], // Kondisi unik
                $pegawai // Data yang akan diupdate atau disisipkan
            );
        }
    }
}
