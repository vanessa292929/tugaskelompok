<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TbahanbakuResource\Pages;
use App\Filament\Resources\TbahanbakuResource\RelationManagers;
use App\Models\tbahanbaku;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TbahanbakuResource extends Resource
{
    protected static ?string $model = tbahanbaku::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Bahan Baku'; 
    }
    public static function getPluralModelLabel(): string
    {
        return 'Bahan Baku'; 
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_bahan_baku')
                    ->label('Kode Bahan Baku')
                    ->required()
                    ->maxLength(15),
                Forms\Components\TextInput::make('nama_bahan_baku')
                    ->label('Nama Bahan Baku')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('stok_bahan_baku')
                    ->label('Stok Bahan Baku')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('satuan_bahan_baku')
                    ->label('Satuan Bahan Baku')
                    ->required()
                    ->maxLength(10),
                Forms\Components\DateTimePicker::make('tanggal_kadaluarsa_bahan_baku')
                    ->label('Tanggal Kadaluarsa Bahan Baku')
                    ->required()
                    ->date(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_bahan_baku')->label('Kode Bahan Baku')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('nama_bahan_baku')->label('Nama Bahan Baku')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('stok_bahan_baku')->label('Stok Bahan Baku')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('satuan_bahan_baku')->label('Satuan Bahan Baku')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tanggal_kadaluarsa_bahan_baku')->label('Tanggal Kadaluarsa Bahan Baku')->sortable()->searchable(),
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
            'index' => Pages\ListTbahanbaku::route('/'),
            'create' => Pages\CreateTbahanbaku::route('/create'),
            'edit' => Pages\EditTbahanbaku::route('/{record}/edit'),
        ];
    }
}
