<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class PertumbuhanPegawaiChart extends ChartWidget
{
    protected static ?string $heading = 'Pertumbuhan Pegawai';

    protected function getData(): array
    {
        // Mengambil data dari tabel pegawai
        $data = DB::table('pegawai')
            ->select('jenis_kelamin_pegawai', 'tahun_masuk', DB::raw('count(*) as total'))
            ->groupBy('jenis_kelamin_pegawai', 'tahun_masuk')
            ->orderBy('tahun_masuk', 'asc')
            ->get();

        // Variabel untuk menyusun data grafik
        $tahunMasuk = [];
        $jenisKelamin = [];
        $totals = [];

        foreach ($data as $row) {
            if (!in_array($row->tahun_masuk, $tahunMasuk)) {
                $tahunMasuk[] = $row->tahun_masuk; // Menambahkan tahun_masuk unik
            }
            $jenisKelamin[$row->jenis_kelamin_pegawai][$row->tahun_masuk] = $row->total; // Data per jenis kelamin
        }

        // Menyusun dataset untuk Chart.js
        foreach ($jenisKelamin as $name => $values) {
            $totals[] = [
                'label' => ucfirst($name), // Nama jenis kelamin
                'data' => array_values(array_replace(array_fill_keys($tahunMasuk, 0), $values)), // Data tahun_masuk
                'backgroundColor' => sprintf('#%06X', mt_rand(0, 0xFFFFFF)), // Warna acak
            ];
        }

        // Mengembalikan data untuk digunakan oleh Chart.js
        return [
            'datasets' => $totals,
            'labels' => $tahunMasuk,
            'options' => [
                'responsive' => true, // Membuat grafik responsif
                'maintainAspectRatio' => false, // Memastikan grafik menyesuaikan ukuran box
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // Tipe grafik batang
    }
}
