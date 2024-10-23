<?php

namespace App\Filament\Resources;
use App\Filament\Resources\ThalamanResource\RelationManagers;
use App\Filament\Resources\ThalamanResource\Pages;

use App\Models\Thalaman;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;


class ThalamanResource extends Resource
{
    protected static ?string $model = Thalaman::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Halaman'; 
    }
    public static function getPluralModelLabel(): string
    {
        return 'Halaman'; 
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_halaman')
                    ->label('Kode Halaman')
                    ->required()
                    ->maxLength(15),
                Forms\Components\TextInput::make('nama_halaman')
                    ->label('Nama Halaman')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('ikon_halaman')
                    ->label('Ikon Halaman')
                    ->required()
                    ->maxLength(25),
                Forms\Components\TextInput::make('urutan_halaman')
                    ->label('Urutan Halaman')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_halaman')->label('Kode Halaman')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('nama_halaman')->label('Nama Halaman')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('ikon_halaman')->label('Ikon Halaman')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('urutan_halaman')->label('Urutan Halaman')->sortable()->searchable(),
            ]);
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
            'index' => ThalamanResource\Pages\ListThalaman::route('/'),
            'create' => ThalamanResource\Pages\CreateThalaman::route('/create'),
            'edit' => ThalamanResource\Pages\EditThalaman::route('/{record}/edit'),
        ];
    }
}
