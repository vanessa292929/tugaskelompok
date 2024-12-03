<?php

namespace App\Filament\Resources\TmenuResource\Pages;

use App\Filament\Resources\TmenuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTmenu extends ListRecords
{
    protected static string $resource = TmenuResource::class;

    protected function getActions(): array
    {
        return [
            Actions\Action::make('cetakLaporanPerformaMenu')
                ->label('Cetak Laporan Performa Menu')
                ->icon('heroicon-o-printer')
                ->action(fn() => $this->cetakLaporanPerformaMenu())
                ->requiresConfirmation(),
        ];
    }

    public function cetakLaporanPerformaMenu()
    {
        $data = \App\Models\Tmenu::select(
            'tmenus.kode_menu',
            'tmenus.nama_menu',
            \DB::raw('COALESCE(SUM(tpesanandetails.total_harga), 0) AS total_penjualan'),
            \DB::raw('GROUP_CONCAT(CONCAT(tbahanbakus.nama_bahan_baku, ": ", tmenudetails.jumlah_bahan_baku_detail, " ", tbahanbakus.satuan_bahan_baku) SEPARATOR ", ") AS jumlah_bahan_baku'),
            \DB::raw('COUNT(tpesanandetails.kode_pesanan_detail) AS jumlah_pesanan')
        )
        ->leftJoin('tpesanandetails', 'tmenus.kode_menu', '=', 'tpesanandetails.kode_menu')
        ->leftJoin('tmenudetails', 'tmenus.kode_menu', '=', 'tmenudetails.kode_menu')
        ->leftJoin('tbahanbakus', 'tmenudetails.kode_bahan_baku', '=', 'tbahanbakus.kode_bahan_baku')
        ->groupBy('tmenus.kode_menu', 'tmenus.nama_menu')
        ->get();

        $pdf = \PDF::loadView('laporan.cetakmenu', ['data' => $data]);
        return response()->streamDownload(fn() => print($pdf->output()), 'laporan-performa-menu.pdf');
    }
}
