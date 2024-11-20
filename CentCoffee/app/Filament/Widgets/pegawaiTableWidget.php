<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Tpegawai; // Gunakan 'Tpegawai' sesuai dengan nama model

class PegawaiTableWidget extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Tpegawai::query() // Gunakan model Tpegawai
                    ->limit(5)
            )
            ->columns([
                Tables\Columns\TextColumn::make('kode_pegawai')
                    ->label('Kode Pegawai')
                    ->sortable(),

                Tables\Columns\TextColumn::make('kata_sandi')
                    ->label('Kata Sandi')
                    ->sortable(),

                Tables\Columns\TextColumn::make('nama_pegawai')
                    ->label('Nama Pegawai')
                    ->sortable(),

                Tables\Columns\TextColumn::make('jenis_kelamin_pegawai')
                    ->label('Jenis Kelamin')
                    ->sortable(),
            ]);
    }
}
