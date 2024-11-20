<?php

namespace App\Filament\Widgets;

use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables;

class PesananTableWidget extends BaseWidget
{
    protected function getTableQuery(): Builder
    {
        // Query untuk tabel `tpesanans`
        return \App\Models\tpesanan::query();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('kode_pesanan')
                ->label('Kode Pesanan')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('tanggal_pesanan')
                ->label('Tanggal Pesanan')
                ->date()
                ->sortable(),

            Tables\Columns\TextColumn::make('pembeli_pesanan')
                ->label('Pembeli')
                ->searchable(),

            Tables\Columns\TextColumn::make('status_pesanan')
                ->label('Status')
                ->sortable(),

            Tables\Columns\TextColumn::make('harga_pesanan')
                ->label('Harga')
                ->money('idr', true) // Format dalam Rupiah
                ->sortable(),
        ];
    }
}
