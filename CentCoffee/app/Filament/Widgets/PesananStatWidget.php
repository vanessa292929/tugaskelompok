<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Support\Facades\DB;

class PesananStatWidget extends BaseWidget
{
    protected function getCards(): array
    {
        // Total Pesanan
        $totalPesanan = DB::table('tpesanans')->count();

        // Total Pendapatan
        $totalPendapatan = DB::table('tpesanans')->sum('harga_pesanan');

        // Total Pesanan Selesai
        $pesananSelesai = DB::table('tpesanans')
            ->where('status_pesanan', 'selesai')
            ->count();

        return [
            Card::make('Total Pesanan', $totalPesanan),
            Card::make('Total Pendapatan', 'Rp ' . number_format($totalPendapatan, 0, ',', '.')),
            Card::make('Pesanan Selesai', $pesananSelesai),
        ];
    }
}
