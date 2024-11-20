<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;

class PegawaiStat extends BaseWidget
{
    protected function getStats(): array
    {
        // Menghitung total pegawai
        $totalPegawai = DB::table('pegawai')->count();

        return [
            // Menggunakan Stat alih-alih Card
            Stat::make('Total Pegawai', $totalPegawai)
                ->description('Jumlah total pegawai saat ini')
                ->descriptionIcon('heroicon-s-users')
                ->color('success'),
        ];
    }
}
