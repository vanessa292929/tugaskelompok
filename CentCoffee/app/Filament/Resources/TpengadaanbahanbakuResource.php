<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TpengadaanbahanbakuResource\Pages;
use App\Filament\Resources\TpengadaanbahanbakuResource\RelationManagers;
use App\Models\tpengadaanBahanBaku;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TimePicker;


class TpengadaanbahanbakuResource extends Resource
{
    protected static ?string $model = tpengadaanBahanBaku::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Pengadaan Bahan Baku';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Pengadaan Bahan Baku';
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('kode_pengadaan_bahan_baku')
                ->required()
                ->label('Kode Pengadaan'),

                Forms\Components\TextInput::make('subjek_pengadaan_bahan_baku')
                ->required()
                ->label('Subjek'),

                Forms\Components\DatePicker::make('tanggal_pengadaan_bahan_baku')
                ->required()
                ->label('Tanggal Pengadaan Bahan Baku')
                ->displayFormat('d/m/Y'),

                Forms\Components\TimePicker::make('waktu_pengadaan_bahan_baku')
                ->required()
                ->label('Waktu Pengadaan Bahan Baku')
                ->displayFormat('H:i'),

                Forms\Components\TextInput::make('catatan_pengadaan_bahan_baku')
                ->required()
                ->label('catatan Pengadaan Bahan Baku'),

                Forms\Components\Select::make('status_pengadaan_bahan_baku')
                ->required()
                ->options([
                    'Pending' => 'Pending',
                    'Selesai' => 'Selesai',
                ])
                ->label('Status'),

                Forms\Components\TextInput::make('kode_prioritas')
                ->required()
                ->label('Kode Prioritas'),
                Forms\Components\TextInput::make('kode_pegawai')
                ->required()
                ->label('Kode Pegawai'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('kode_pengadaan_bahan_baku')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('subjek_pengadaan_bahan_baku')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('tanggal_pengadaan_bahan_baku')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('waktu_pengadaan_bahan_baku')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('catatan_pengadaan_bahan_baku')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('status_pengadaan_bahan_baku')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('kode_prioritas')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('kode_pegawai')->sortable()->searchable(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTpengadaanbahanbaku::route('/'),
            'create' => Pages\CreateTpengadaanbahanbaku::route('/create'),
            'edit' => Pages\EditTpengadaanbahanbaku::route('/{record}/edit'),
        ];
    }
}
