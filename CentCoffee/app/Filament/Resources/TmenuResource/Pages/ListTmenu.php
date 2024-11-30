<?php

namespace App\Filament\Resources\TmenuResource\Pages;

use App\Filament\Resources\TmenuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTMenu extends ListRecords
{
    protected static string $resource = TmenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(), // Tombol New
            Actions\Action::make('cetak_laporan') // Tombol Cetak Laporan
                ->label('Cetak Laporan')
                ->icon('heroicon-o-printer')
                ->action(fn() => static::cetakLaporan())
                ->requiresConfirmation()
                ->modalHeading('Cetak Laporan Menu')
                ->modalSubheading('Apakah Anda yakin ingin mencetak laporan menu?'),
        ];
    }

    public static function cetakLaporan()
    {
        // Ambil data menu
        $data = \App\Models\tmenu::all();

        // Load view untuk cetak PDF
        $pdf = \PDF::loadView('laporan.cetakmenu', ['data' => $data]);

        // Unduh file PDF
        return response()->streamDownload(
            fn() => print($pdf->output()),
            'laporan-menu.pdf'
        );
    }
}
