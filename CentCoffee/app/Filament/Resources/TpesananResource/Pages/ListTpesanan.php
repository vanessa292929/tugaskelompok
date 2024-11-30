<?php

namespace App\Filament\Resources\TpesananResource\Pages;

use App\Filament\Resources\TpesananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTpesanan extends ListRecords
{
    protected static string $resource = TpesananResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(), // Tombol New
            Actions\Action::make('cetak_laporan') // Tombol Cetak Laporan
                ->label('Cetak Laporan')
                ->icon('heroicon-o-printer')
                ->action(fn() => static::cetakLaporan())
                ->requiresConfirmation()
                ->modalHeading('Cetak Laporan Pesanan')
                ->modalSubheading('Apakah Anda yakin ingin mencetak laporan pesanan ini?'),
        ];
    }

    public static function cetakLaporan()
    {
        // Ambil data pesanan
        $data = \App\Models\tpesanan::all();

        // Load view untuk cetak PDF
        $pdf = \PDF::loadView('laporan.cetakpesanan', ['data' => $data]);

        // Unduh file PDF
        return response()->streamDownload(
            fn() => print($pdf->output()),
            'laporan-pesanan.pdf'
        );
    }
}
