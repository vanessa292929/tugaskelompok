<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TmenudetailResource\Pages;
use App\Filament\Resources\TmenudetailResource\RelationManagers;
use App\Models\tmenuDetail;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;


class TmenudetailResource extends Resource
{
    protected static ?string $model = tmenuDetail::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Menu Detail'; 
    }
    public static function getPluralModelLabel(): string
    {
        return 'Menu Detail'; 
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_menu_detail')
                    ->required(),
                    Forms\Components\TextInput::make('jumlah_bahan_baku_detail')
                    ->required()
                    ->numeric(),
                    Forms\Components\TextInput::make('kode_menu')
                    ->required(),
                    Forms\Components\TextInput::make('kode_bahan_baku')
                    ->required()
                    ->maxLength(15),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_menu_detail')->label('Kode Menu Detail')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('jumlah_bahan_baku_detail')->label('Jumlah Bahan Baku Detail')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kode_menu')->label('Kode Menu')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kode_bahan_baku')->label('Kode Bahan Baku')->sortable()->searchable(),
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
            'index' => Pages\ListTmenudetail::route('/'),
            'create' => Pages\CreateTmenudetail::route('/create'),
            'edit' => Pages\EditTmenudetail::route('/{record}/edit'),
        ];
    }
}
