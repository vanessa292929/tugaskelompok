<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TmenuResource\Pages;
use App\Filament\Resources\TmenuResource\RelationManagers;
use App\Models\tmenu;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;


class TmenuResource extends Resource
{
    protected static ?string $model = tmenu::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    
    public static function getModelLabel(): string
    {
        return 'Menu'; 
    }
    public static function getPluralModelLabel(): string
    {
        return 'Menu'; 
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_menu')
                    ->label('Kode Menu')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('nama_menu')
                    ->label('Nama Menu')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('jenis_menu')
                    ->label('Jenis Menu')
                    ->required(),
                Forms\Components\TextInput::make('harga_menu')
                    ->label('Harga Menu')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('deskripsi_menu')
                    ->label('Deskripsi Menu')
                    ->required(),
                Forms\Components\TextInput::make('kode_pegawai')
                    ->label('Kode Pegawai')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_menu')->label('Kode Menu')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('nama_menu')->label('Nama Menu')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('jenis_menu')->label('Jenis Menu')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('harga_menu')->label('Harga Menu')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('deskripsi_menu')->label('Deskripsi Menu')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kode_pegawai')->label('Kode Pegawai')->sortable()->searchable(),
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
            'index' => Pages\ListTmenu::route('/'),
            'create' => Pages\CreateTmenu::route('/create'),
            'edit' => Pages\EditTmenu::route('/{record}/edit'),
        ];
    }
}
