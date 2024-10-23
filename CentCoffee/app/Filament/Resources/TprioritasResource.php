<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TprioritasResource\Pages;
use App\Filament\Resources\TprioritasResource\RelationManagers;
use App\Models\tprioritas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
class TprioritasResource extends Resource
{
    protected static ?string $model = tprioritas::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Prioritas';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Prioritas';
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('kode_prioritas')
                ->required()
                ->label('Kode Prioritas'),
                Forms\Components\TextInput::make('nama_prioritas')
                ->required()
                ->label('Nama Prioritas'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('kode_prioritas')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('nama_prioritas')->sortable()->searchable(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTprioritas::route('/'),
           'create' => Pages\CreateTprioritas::route('/create'),
            'edit' => Pages\EditTprioritas::route('/{record}/edit'),
        ];
    }
}
