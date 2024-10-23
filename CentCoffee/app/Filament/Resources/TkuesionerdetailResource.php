<?php

namespace App\Filament\Resources;
use App\Filament\Resources\TkuesionerdetailResource\RelationManagers;
use App\Filament\Resources\TkuesionerdetailResource\Pages;

use App\Models\tkuesionerdetail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;


class TkuesionerdetailResource extends Resource
{
    protected static ?string $model = tkuesionerDetail::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Kuesioner Detail'; 
    }
    public static function getPluralModelLabel(): string
    {
        return 'Kuesioner Detail'; 
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
                Forms\Components\TextInput::make('kode_kuisioner_detil')
                    ->label('Kode Kuisioner Detil')
                    ->required()
                    ->maxLength(10),

                Forms\Components\TextInput::make('kode_kuisioner_perangkat')
                    ->label('Kode Kuisioner Perangkat')
                    ->required()
                    ->maxLength(10),

                Forms\Components\TextInput::make('kode_kuisioner')
                    ->label('Kode Kuisioner')
                    ->required()
                    ->maxLength(10),

                Forms\Components\TextInput::make('poin_kuisioner_detil')
                    ->label('Poin Kuisioner Detil')
                    ->numeric()
                    ->required()
                    ->minValue(0)
                    ->maxValue(255), // Adjust if a larger value is needed
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
        Tables\Columns\TextColumn::make('kode_kuisioner_detil')
            ->label('Kode Kuisioner Detil')
            ->searchable()
            ->sortable(),
        Tables\Columns\TextColumn::make('kode_kuisioner_perangkat')
            ->label('Kode Kuisioner Perangkat')
            ->searchable()
            ->sortable(),
        Tables\Columns\TextColumn::make('kode_kuisioner')
            ->label('Kode Kuisioner')
            ->searchable()
            ->sortable(),
        Tables\Columns\TextColumn::make('poin_kuisioner_detil')
            ->label('Poin Kuisioner Detil')
            ->searchable()
            ->sortable(),
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
            'index' => Pages\ListTkuesionerdetail::route('/'),
            'create' => Pages\CreateTkuesionerdetail::route('/create'),
            'edit' => Pages\EditTkuesionerdetail::route('/{record}/edit'),
        ];
    }
}
