<?php

namespace App\Filament\Resources\TpengadaanbahanbakuResource\Pages;

use App\Filament\Resources\TpengadaanbahanbakuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTpengadaanbahanbaku extends ListRecords
{
    protected static string $resource = TpengadaanbahanbakuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(), // Tombol New
            Actions\Action::make('cetak_laporan') // Tombol Cetak Laporan
                ->label('Cetak Laporan')
                ->icon('heroicon-o-printer')
                ->action(fn() => static::cetakLaporan())
                ->requiresConfirmation()
                ->modalHeading('Cetak Laporan Pengadaan Bahan Baku')
                ->modalSubheading('Apakah Anda yakin ingin mencetak laporan pengadaan bahan baku ini?'),
        ];
    }

    public static function cetakLaporan()
    {
        // Ambil data pengadaan bahan baku
        $data = \App\Models\Tpengadaanbahanbaku::all();

        // Load view untuk cetak PDF
        $pdf = \PDF::loadView('laporan.cetakpengadaanbahanbaku', ['data' => $data]);

        // Unduh file PDF
        return response()->streamDownload(
            fn() => print($pdf->output()),
            'laporan-pengadaan-bahan-baku.pdf'
        );
    }
}
