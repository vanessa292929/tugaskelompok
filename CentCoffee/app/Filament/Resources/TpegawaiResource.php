<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TpegawaiResource\Pages;
use App\Filament\Resources\TpegawaiResource\RelationManagers;
use App\Models\tpegawai;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;

class TpegawaiResource extends Resource
{
    protected static ?string $model = tpegawai::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Pegawai';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Pegawai';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_pegawai')
                    ->required()
                    ->maxLength(15),
                    Forms\Components\TextInput::make('kata_sandi')
                    ->required()
                    ->maxLength(100),
                    Forms\Components\TextInput::make('nama_pegawai')
                    ->required()
                    ->maxLength(50),
                    Forms\Components\Select::make('jenis_kelamin_pegawai')
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ])
                    ->required(),
                    Forms\Components\TextInput::make('kode_otoritas')
                    ->required()
                    ->maxLength(15),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_pegawai')->label('Kode Pegawai')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('nama_pegawai')->label('Nama Pegawai')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kata_sandi')->label('Kata Sandi')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('jenis_kelamin_pegawai')->label('Jenis Kelamin Pegawai')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kode_otoritas')->label('Kode Otoritas')->sortable()->searchable(),
            ])
            ->filters([]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTpegawai::route('/'),
            'create' => Pages\CreateTpegawai::route('/create'),
            'edit' => Pages\EditTpegawai::route('/{record}/edit'),
        ];
    }
}
