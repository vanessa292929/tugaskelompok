<?php

namespace App\Filament\Resources\TmenudetailResource\Pages;

use App\Filament\Resources\TmenudetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTMenuDetail extends ListRecords
{
    protected static string $resource = TmenudetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(), // Tombol New
            Actions\Action::make('cetak_laporan') // Tombol Cetak Laporan
                ->label('Cetak Laporan')
                ->icon('heroicon-o-printer')
                ->action(fn() => static::cetakLaporan())
                ->requiresConfirmation()
                ->modalHeading('Cetak Laporan Menu Detail')
                ->modalSubheading('Apakah Anda yakin ingin mencetak laporan menu detail?'),
        ];
    }

    public static function cetakLaporan()
    {
        $data = \App\Models\Tmenudetail::with(['menu', 'bahanBaku'])->get();

        $pdf = \PDF::loadView('laporan.cetakmenudetail', ['data' => $data]);

        return response()->streamDownload(
            fn() => print($pdf->output()),
            'laporan-menu-detail.pdf'
        );
    }
}
