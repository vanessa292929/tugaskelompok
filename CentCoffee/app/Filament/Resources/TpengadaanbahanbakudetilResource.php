<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TpengadaanbahanbakudetilResource\Pages;
use App\Filament\Resources\TpengadaanbahanbakudetilResource\RelationManagers;
use App\Models\Tpengadaanbahanbakudetil;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TpengadaanbahanbakudetilResource extends Resource
{
    protected static ?string $model = Tpengadaanbahanbakudetil::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Pengadaan BahanBaku Detil';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Pengadaan BahanBaku Detil';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_pengadaan_bahan_baku_detil')
                    ->required()

                    ->label('Kode Pengadaan Bahan Baku Detil'), 

                Forms\Components\TextInput::make('kode_pengadaan_bahan_baku')
                    
                    ->required()
                    ->label('Kode Pengadaan Bahan Baku'),

                Forms\Components\TextInput::make('nama_bahan_baku')
                    ->required()
                    ->maxLength(50)
                    ->label('Nama Bahan Baku'),

                Forms\Components\TextInput::make('nama_supplier')
                    ->required()
                    ->maxLength(50)
                    ->label('Nama Supplier'),

                Forms\Components\TextInput::make('jumlah_bahan_baku')
                    ->required()

                    ->label('Jumlah Bahan Baku'),

                Forms\Components\TextInput::make('satuan_bahan_baku')
                    ->required()
                    ->maxLength(10)
                    ->label('Satuan Bahan Baku'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_pengadaan_bahan_baku_detil')
                    ->searchable()
                    ->sortable()
                    ->label('Kode Pengadaan Bahan Baku Detil'),
                Tables\Columns\TextColumn::make('kode_pengadaan_bahan_baku')
                    ->searchable()
                    ->sortable()
                    ->label('Kode Pengadaan Bahan Baku'), 
                Tables\Columns\TextColumn::make('nama_bahan_baku')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Bahan Baku'),
                Tables\Columns\TextColumn::make('nama_supplier')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Supplier'),
                Tables\Columns\TextColumn::make('jumlah_bahan_baku')
                    ->searchable()
                    ->sortable()
                    ->label('Jumlah Bahan Baku'),
                Tables\Columns\TextColumn::make('satuan_bahan_baku')
                    ->searchable()
                    ->sortable()
                    ->label('Satuan Bahan Baku'),
            ]);
        }

    public static function getRelations(): array
    {
        return [
                
        ];
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTpengadaanbahanbakudetils::route('/'),
            'create' => Pages\CreateTpengadaanbahanbakudetil::route('/create'),
            'edit' => Pages\EditTpengadaanbahanbakudetil::route('/{record}/edit'),
        ];
    }
}
