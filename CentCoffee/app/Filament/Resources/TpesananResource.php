<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TpesananResource\Pages;
use App\Filament\Resources\TpesananResource\RelationManagers;
use App\Models\tpesanan;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;

class TpesananResource extends Resource
{
    protected static ?string $model = tpesanan::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Pesanan';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Pesanan';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_pesanan')
                ->label('Kode Pesanan')
                    ->required(),

                    Forms\Components\DatePicker::make('tanggal_pesanan')
                    ->label('Tanggal Pesanan')
                    ->required()
                    ->displayFormat('d/m/Y'),

                    Forms\Components\TimePicker::make('waktu_pesanan')
                    ->label('Waktu Pesanan')
                    ->required()
                    ->displayFormat('h:i A'),

                    Forms\Components\TextInput::make('pembeli_pesanan')
                    ->label('Pembeli Pesanan')
                    ->required()
                    ->maxLength(50),

                    Forms\Components\TextInput::make('catatan_pesanan')
                    ->label('Catatan Pesanan')
                    ->nullable(),

                    Forms\Components\TextInput::make('harga_pesanan')
                    ->label('Harga Pesanan')
                    ->required()
                    ->maxLength(50),

                    Forms\Components\TextInput::make('tunai_pesananan')
                    ->label('Tunai Pesanan')
                    ->required()
                    ->maxLength(50),

                    Forms\Components\Select::make('status_pesanan')
                    ->label('Status Pesanan')
                    ->options([
                    //    'C' => 'Completed',
                        'P' => 'Pending',
                      //  'T' => 'Taken',
                        'D' => 'Delivered',
                    ])
                    ->required(),
                    Forms\Components\TextInput::make('kode_pegawai')
                    ->label('Kode Pegawai')
                    ->required()
                    ->maxLength(15),
                    Forms\Components\TextInput::make('kode_perangkat')
                    ->label('Kode Perangkat')
                    ->required()
                    ->maxLength(15),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_pesanan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tanggal_pesanan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('waktu_pesanan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('pembeli_pesanan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('catatan_pesanan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('harga_pesanan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tunai_pesananan')->sortable()->searchable()
                ->label('Tunai Pesanan'),

                Tables\Columns\TextColumn::make('status_pesanan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kode_pegawai')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kode_perangkat')->sortable()->searchable(),
            ])
            ->filters([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTpesanan::route('/'),
            'create' => Pages\CreateTpesanan::route('/create'),
            'edit' => Pages\EditTpesanan::route('/{record}/edit'),
        ];
    }
}
