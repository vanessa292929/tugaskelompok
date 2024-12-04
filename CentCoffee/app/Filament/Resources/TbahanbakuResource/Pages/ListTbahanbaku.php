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
                ->action(fn() => $this->cetakFinal()) // Menggunakan metode cetakFinal
                ->requiresConfirmation()
                ->modalHeading('Cetak Laporan Analisis Bahan Baku')
                ->modalSubheading('Apakah Anda yakin ingin mencetak laporan analisis bahan baku ini?'),
        ];
    }

    public static function cetakFinal()
    {
        // Ambil data laporan gabungan
        $data = \DB::select("
            SELECT 
                bb.kode_bahan_baku AS kode_bahan_baku,
                bb.nama_bahan_baku AS nama_bahan_baku,
                bb.stok_bahan_baku AS stok_bahan_baku,
                bb.satuan_bahan_baku AS satuan_bahan_baku,
                COALESCE(MAX(pb.jumlah_pengadaan), 0) AS jumlah_pengadaan,
                COALESCE(MAX(md.jumlah_bahan_baku_detail), 0) AS jumlah_pemakaian
            FROM tbahanbakus bb
            LEFT JOIN tpengadaanbahanbakus pb ON bb.kode_bahan_baku = pb.kode_bahan_baku
            LEFT JOIN tmenudetails md ON bb.kode_bahan_baku = md.kode_bahan_baku
            GROUP BY bb.kode_bahan_baku, bb.nama_bahan_baku, bb.stok_bahan_baku, bb.satuan_bahan_baku
            ORDER BY jumlah_pemakaian DESC
        ");

        // Load view untuk cetak PDF
        $pdf = \PDF::loadView('laporan.cetakbahanbakugabungan', ['data' => $data]);

        // Unduh file PDF
        return response()->streamDownload(
            fn() => print($pdf->output()),
            'laporan-analisis-bahan-baku-gabungan.pdf'
        );
    }
    }