<?php

namespace App\Filament\Resources\TbahanbakuResource\Pages;

use App\Filament\Resources\TbahanbakuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTbahanbaku extends ListRecords
{
    protected static string $resource = TbahanbakuResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('cetakLaporanAnalisisBahanBaku')
                ->label('Cetak Analisis Pemakaian dan Pengadaan')
                ->icon('heroicon-o-printer')
                ->action(fn() => $this->cetakLaporanAnalisisBahanBaku())
                ->requiresConfirmation()
                ->modalHeading('Cetak Laporan Analisis Bahan Baku')
                ->modalSubheading('Apakah Anda yakin ingin mencetak laporan analisis bahan baku ini?'),
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('cetakLaporanBahanBaku')
                ->label('Cetak Laporan')
                ->icon('heroicon-o-document-text')
                ->action(fn() => $this->cetakLaporanBahanBaku())
                ->requiresConfirmation()
                ->modalHeading('Cetak Laporan Bahan Baku')
                ->modalSubheading('Apakah Anda yakin ingin mencetak laporan bahan baku ini?'),
            Actions\Action::make('cetakLaporanAnalisisBahanBaku')
                ->label('Cetak Analisis Pemakaian dan Pengadaan')
                ->icon('heroicon-o-printer')
                ->action(fn() => $this->cetakLaporanAnalisisBahanBaku())
                ->requiresConfirmation()
                ->modalHeading('Cetak Laporan Analisis Bahan Baku')
                ->modalSubheading('Apakah Anda yakin ingin mencetak laporan analisis bahan baku ini?'),
        ];
    }

    public function cetakLaporanBahanBaku()
    {
        $data = \App\Models\Tbahanbaku::all(); // Ambil semua data bahan baku
        $pdf = \PDF::loadView('laporan.cetakbahanbaku', ['data' => $data]);  
        return response()->streamDownload(
            fn() => print($pdf->output()),
            'laporan-bahan-baku.pdf'
        );
    }

    public function cetakLaporanAnalisisBahanBaku()
    {
        $data = \App\Models\Tbahanbaku::select(
            'tbahanbakus.kode_bahan_baku',
            'tbahanbakus.nama_bahan_baku',
            'tbahanbakus.stok_bahan_baku',
            'tbahanbakus.satuan_bahan_baku',
            \DB::raw('COALESCE(MAX(tpengadaanbahanbakus.jumlah_pengadaan), 0) AS jumlah_pengadaan'), // Mengambil jumlah pengadaan yang paling baru
            \DB::raw('COALESCE(SUM(tmenudetails.jumlah_bahan_baku_detail), 0) AS jumlah_pemakaian')
        )
        ->leftJoin('tpengadaanbahanbakus', 'tbahanbakus.kode_bahan_baku', '=', 'tpengadaanbahanbakus.kode_bahan_baku')
        ->leftJoin('tmenudetails', 'tbahanbakus.kode_bahan_baku', '=', 'tmenudetails.kode_bahan_baku')
        ->groupBy('tbahanbakus.kode_bahan_baku', 'tbahanbakus.nama_bahan_baku', 'tbahanbakus.stok_bahan_baku', 'tbahanbakus.satuan_bahan_baku')
        ->get();

        $pdf = \PDF::loadView('laporan.cetakbahanbakugabungan', ['data' => $data]);  
        return response()->streamDownload(
            fn() => print($pdf->output()),
            'laporan-analisis-bahan-baku.pdf'
        );
    }
}
