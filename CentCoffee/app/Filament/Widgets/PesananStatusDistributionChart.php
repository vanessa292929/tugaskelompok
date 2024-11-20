<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class PesananStatusDistributionChart extends ChartWidget
{
    protected static ?string $heading = 'Distribusi Status Pesanan';

    protected function getData(): array
    {
        // Mengambil data distribusi status pesanan dari tabel `tpesanans`
        $data = DB::table('tpesanans')
            ->select('status_pesanan', DB::raw('COUNT(*) as total'))
            ->groupBy('status_pesanan')
            ->get();

        // Variabel untuk menyusun data grafik
        $statusPesanan = [];
        $totals = [];

        foreach ($data as $row) {
            $statusPesanan[] = $row->status_pesanan; // Label status pesanan
            $totals[] = $row->total; // Total jumlah pesanan per status
        }

        // Mengembalikan data dalam format yang dapat diterima Chart.js
        return [
            'datasets' => [
                [
                    'label' => 'Status Pesanan',
                    'data' => $totals,
                    'backgroundColor' => array_map(fn () => sprintf('#%06X', mt_rand(0, 0xFFFFFF)), $statusPesanan), // Warna acak
                ],
            ],
            'labels' => $statusPesanan,
            'options' => [
                'responsive' => true,
                'maintainAspectRatio' => false,
            ],
        ];
    }

    protected function getType(): string
    {
        return 'pie'; // Menggunakan Pie Chart
    }
}
