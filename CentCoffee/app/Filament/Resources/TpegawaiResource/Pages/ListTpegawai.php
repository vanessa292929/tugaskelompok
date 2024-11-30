<?php

namespace App\Filament\Resources\TpegawaiResource\Pages;

use App\Filament\Resources\TpegawaiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTpegawai extends ListRecords
{
    protected static string $resource = TpegawaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(), // Tombol New
            Actions\Action::make('cetak_laporan')
                ->label('Cetak Laporan')
                ->icon('heroicon-o-printer')
                ->action(fn() => static::cetakLaporan())
                ->requiresConfirmation()
                ->modalHeading('Cetak Laporan Pegawai')
                ->modalSubheading('Apakah Anda yakin ingin mencetak laporan ini?'),
        ];
    }

    public static function cetakLaporan()
    {
        // Ambil data pegawai
        $data = \App\Models\tpegawai::all();

        // Load view untuk cetak PDF
        $pdf = \PDF::loadView('laporan.cetakpegawai', ['data' => $data]);

        // Unduh file PDF
        return response()->streamDownload(fn() => print($pdf->output()), 'laporan-pegawai.pdf');
    }
}
