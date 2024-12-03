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
            Actions\Action::make('cetakLaporanKinerjaPegawai')
                ->label('Cetak Laporan Kinerja Pegawai dan Penjualan')
                ->icon('heroicon-o-printer')
                ->action(fn() => $this->cetakLaporanKinerjaPegawai())
                ->requiresConfirmation(),
        ];
    }

    public function cetakLaporanKinerjaPegawai()
    {
        // Ambil data dari tabel yang dibutuhkan untuk laporan
        $data = \App\Models\tpegawai::select(
            'tpegawais.kode_pegawai',
            'tpegawais.nama_pegawai',
            \DB::raw('COUNT(tpesanans.kode_pegawai) AS jumlah_transaksi'),
            \DB::raw('SUM(tpesanandetails.total_harga) AS total_penjualan'),
            \DB::raw('MAX(menu.nama_menu) AS menu_terbanyak')  // Ini langsung menggunakan MAX
        )
        ->join('tpesanans', 'tpegawais.kode_pegawai', '=', 'tpesanans.kode_pegawai')
        ->join('tpesanandetails', 'tpesanans.kode_pesanan', '=', 'tpesanandetails.kode_pesanan')
        ->join('tmenus as menu', 'tpesanandetails.kode_menu', '=', 'menu.kode_menu')  // Pastikan join dengan tabel menu
        ->groupBy('tpegawais.kode_pegawai', 'tpegawais.nama_pegawai')
        ->get();

        // Proses PDF dengan data yang sudah diambil
        $pdf = \PDF::loadView('laporan.cetakpegawai', ['data' => $data]);

        // Menghasilkan file PDF untuk diunduh
        return response()->streamDownload(fn() => print($pdf->output()), 'laporan-kinerja-pegawai.pdf');
    }
}