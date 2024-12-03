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

    public function getBulkActions(): array
    {
        return [
            Actions\DeleteBulkAction::make(), // Tombol Delete
        ];
    }
    public function getTableActions(): array
    {
        return [
            Actions\EditAction::make(), // Tambahkan tombol Edit
        ];
    }

    public static function cetakLaporan()
    {
        $data = \App\Models\tpesanan::all();

        $pdf = \PDF::loadView('laporan.cetakpesanan', ['data' => $data]);

        // Unduh file PDF
        return response()->streamDownload(
            fn() => print($pdf->output()),
            'laporan-pesanan.pdf'
        );
    }
}
