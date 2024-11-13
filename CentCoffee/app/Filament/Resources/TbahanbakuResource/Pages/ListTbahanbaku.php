<?php

namespace App\Filament\Resources\TbahanbakuResource\Pages;

use App\Filament\Resources\TbahanbakuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTbahanbaku extends ListRecords
{
    protected static string $resource = TbahanbakuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(), // Tombol New
            Actions\Action::make('cetak_laporan')
            ->label('Cetak Laporan')
            ->icon('heroicon-o-printer')
            ->action(fn() => static::cetakLaporan())
            ->requiresConfirmation()
            ->modalHeading('Cetak Laporan Pengguna')
            ->modalSubheading('Apakah Anda yakin ingin mencetak laporan?'),
            ];
            }
            public static function cetakLaporan()
            {
            // Ambil data pengguna
            $data = \App\Models\User::all();
            // Load view untuk cetak PDF
            $pdf = \PDF::loadView('laporan.cetak', ['data' => $data]);
            // Unduh file PDF
            return response()->streamDownload(fn() => print($pdf->output()), 'laporan-
            pengguna.pdf');
            }
            }