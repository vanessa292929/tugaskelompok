<?php

namespace App\Filament\Resources\TpegawaiResource\Pages;

use App\Filament\Resources\TpegawaiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTpegawai extends ListRecords
{
    protected static string $resource = TpegawaiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('cetakLaporanKinerjaPegawai')
                ->label('Cetak Laporan Kinerja Pegawai dan Penjualan')
                ->icon('heroicon-o-printer')
                ->action(fn() => $this->cetakLaporanKinerjaPegawai())
                ->requiresConfirmation()
                ->modalHeading('Cetak Laporan Kinerja Pegawai')
                ->modalSubheading('Apakah Anda yakin ingin mencetak laporan ini?'),
        ];
    }

    public static function cetakLaporanKinerjaPegawai()
    {
        
        $data = \DB::select("
            SELECT 
                p.kode_pegawai AS kode_pegawai,
                p.nama_pegawai AS nama_pegawai,
                COUNT(ps.kode_pegawai) AS jumlah_transaksi,
                SUM(pd.total_harga) AS total_penjualan,
                MAX(m.nama_menu) AS menu_terbanyak
            FROM tpegawais p
            LEFT JOIN tpesanans ps ON p.kode_pegawai = ps.kode_pegawai
            LEFT JOIN tpesanandetails pd ON ps.kode_pesanan = pd.kode_pesanan
            LEFT JOIN tmenus m ON pd.kode_menu = m.kode_menu
            GROUP BY p.kode_pegawai, p.nama_pegawai
            ORDER BY total_penjualan DESC
        ");

        $pdf = \PDF::loadView('laporan.cetakpegawai', ['data' => $data]);

        return response()->streamDownload(
            fn() => print($pdf->output()),
            'laporan-kinerja-pegawai.pdf'
        );
    }
}
