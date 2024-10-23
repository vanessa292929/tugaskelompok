<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TotoritasResource\Pages;
use App\Filament\Resources\TotoritasResource\RelationManagers;
use App\Models\totoritas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;


class TotoritasResource extends Resource
{
    protected static ?string $model = totoritas::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Otoritas';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Otoritas';
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('kode_otoritas')
                ->required()
                ->label('Kode Otoritas'),
                Forms\Components\TextInput::make('nama_otoritas')
                ->required()
                ->label('Nama Otoritas'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('kode_otoritas')->label('Kode Otoritas')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('nama_otoritas')->label('Nama Otoritas')->sortable()->searchable(),
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
            'index' => Pages\ListTotoritas::route('/'),
            'create' => Pages\CreateTotoritas::route('/create'),
            'edit' => Pages\EditTotoritas::route('/{record}/edit'),
        ];
    }
}
