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

    public function cetakLaporanKinerjaPegawai()
    {
        try {
            // Ambil data dari tabel yang dibutuhkan untuk laporan
            $data = \App\Models\tpegawai::select(
                'tpegawais.kode_pegawai',
                'tpegawais.nama_pegawai',
                \DB::raw('COUNT(tpesanans.kode_pegawai) AS jumlah_transaksi'),
                \DB::raw('SUM(tpesanandetails.total_harga) AS total_penjualan'),
                \DB::raw('MAX(menu.nama_menu) AS menu_terbanyak')
            )
            ->leftJoin('tpesanans', 'tpegawais.kode_pegawai', '=', 'tpesanans.kode_pegawai')
            ->leftJoin('tpesanandetails', 'tpesanans.kode_pesanan', '=', 'tpesanandetails.kode_pesanan')
            ->leftJoin('tmenus as menu', 'tpesanandetails.kode_menu', '=', 'menu.kode_menu')
            ->groupBy('tpegawais.kode_pegawai', 'tpegawais.nama_pegawai')
            ->get();

            // Debug data untuk memastikan ada data
            if ($data->isEmpty()) {
                throw new \Exception('Data laporan kosong. Tidak ada transaksi yang ditemukan.');
            }

            // Proses PDF dengan data yang sudah diambil
            $pdf = \PDF::loadView('laporan.cetakpegawai', ['data' => $data]);

            // Menghasilkan file PDF untuk diunduh
            return response()->streamDownload(fn() => print($pdf->output()), 'laporan-kinerja-pegawai.pdf');
        } catch (\Exception $e) {
            // Tangkap error dan kembalikan pesan error ke pengguna
            session()->flash('error', 'Gagal mencetak laporan: ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
