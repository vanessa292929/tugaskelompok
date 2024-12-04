<?php

namespace App\Filament\Resources\TmenuResource\Pages;

use App\Filament\Resources\TmenuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\DB;

class ListTmenu extends ListRecords
{
    protected static string $resource = TmenuResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('cetakLaporanPerformaMenu')
                ->label('Cetak Laporan Performa Menu')
                ->icon('heroicon-o-printer')
                ->action(fn() => $this->cetakLaporanPerformaMenu())
                ->requiresConfirmation()
                ->modalHeading('Cetak Laporan Performa Menu')
                ->modalSubheading('Apakah Anda yakin ingin mencetak laporan pesanan ini?'),
        ];
    }

    public function getTableActions(): array
    {
        return [
            DeleteAction::make(), 
        ];
    }

    public function cetakLaporanPerformaMenu()
    {
        $data = DB::select("
            SELECT 
                tmenus.kode_menu AS kode_menu,
                tmenus.nama_menu AS nama_menu,
                COALESCE(SUM(tpesanandetails.total_harga), 0) AS total_penjualan,
                COALESCE(
                    GROUP_CONCAT(
                        CONCAT(tbahanbakus.nama_bahan_baku, ': ', tmenudetails.jumlah_bahan_baku_detail, ' ', tbahanbakus.satuan_bahan_baku)
                        SEPARATOR ', '
                    ), 
                    'Tidak Ada Bahan Baku'
                ) AS jumlah_bahan_baku,
                COUNT(tpesanandetails.kode_pesanan_detail) AS jumlah_pesanan
            FROM tmenus
            LEFT JOIN tpesanandetails ON tmenus.kode_menu = tpesanandetails.kode_menu
            LEFT JOIN tmenudetails ON tmenus.kode_menu = tmenudetails.kode_menu
            LEFT JOIN tbahanbakus ON tmenudetails.kode_bahan_baku = tbahanbakus.kode_bahan_baku
            GROUP BY tmenus.kode_menu, tmenus.nama_menu
        ");

        $pdf = \PDF::loadView('laporan.cetakmenu', ['data' => $data]);
        return response()->streamDownload(fn() => print($pdf->output()), 'laporan-performa-menu.pdf');
    }
}
