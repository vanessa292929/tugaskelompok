<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class PesananGrowthChart extends ChartWidget
{
    protected static ?string $heading = 'Grafik Pertumbuhan Pesanan';

    protected function getData(): array
    {
        // Mengambil data dari tabel `tpesanan`
        $data = DB::table('tpesanans')
            ->select('status_pesanan', DB::raw('DATE(tanggal_pesanan) as tanggal'), DB::raw('COUNT(*) as total'))
            ->groupBy('status_pesanan', 'tanggal')
            ->orderBy('tanggal', 'asc')
            ->get();

        // Variabel untuk menyusun data grafik
        $statusPesanan = [];
        $tanggalPesanan = [];
        $totals = [];

        foreach ($data as $row) {
            // Menambahkan tanggal unik
            if (!in_array($row->tanggal, $tanggalPesanan)) {
                $tanggalPesanan[] = $row->tanggal;
            }
            // Data per status pesanan
            $statusPesanan[$row->status_pesanan][$row->tanggal] = $row->total;
        }

        foreach ($statusPesanan as $status => $values) {
            $totals[] = [
                'label' => $status, // Label status pesanan
                'data' => array_values(array_replace(array_fill_keys($tanggalPesanan, 0), $values)), // Data per tanggal
                'backgroundColor' => sprintf('#%06X', mt_rand(0, 0xFFFFFF)), // Warna acak
            ];
        }

        // Mengembalikan data dalam format yang dapat diterima Chart.js
        return [
            'datasets' => $totals,
            'labels' => $tanggalPesanan,
            'options' => [
                'responsive' => true, // Membuat grafik responsif
                'maintainAspectRatio' => false, // Memastikan grafik dapat menyesuaikan ukuran box
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // Grafik batang
    }
}
