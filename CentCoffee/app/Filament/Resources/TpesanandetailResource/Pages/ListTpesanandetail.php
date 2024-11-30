<?php

namespace App\Filament\Resources\TpesanandetailResource\Pages;

use App\Filament\Resources\TpesanandetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTpesanandetail extends ListRecords
{
    protected static string $resource = TpesanandetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(), // Tombol New
            Actions\Action::make('cetak_laporan') // Tombol Cetak Laporan
                ->label('Cetak Laporan')
                ->icon('heroicon-o-printer')
                ->action(fn() => static::cetakLaporan())
                ->requiresConfirmation()
                ->modalHeading('Cetak Laporan Detail Pesanan')
                ->modalSubheading('Apakah Anda yakin ingin mencetak laporan detail pesanan?'),
        ];
    }

    public static function cetakLaporan()
    {
        // Ambil data detail pesanan beserta relasi ke tabel menu
        $data = \App\Models\Tpesanandetail::with('menu')->get();

        // Load view untuk cetak PDF
        $pdf = \PDF::loadView('laporan.cetakpesanandetail', ['data' => $data]);

        // Unduh file PDF
        return response()->streamDownload(
            fn() => print($pdf->output()),
            'laporan-detail-pesanan.pdf'
        );
    }
}
