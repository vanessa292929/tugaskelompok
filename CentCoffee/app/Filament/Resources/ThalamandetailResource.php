<?php

namespace App\Filament\Resources;
use App\Filament\Resources\ThalamandetailResource\RelationManagers;
use App\Filament\Resources\ThalamandetailResource\Pages;
use App\Models\ThalamanDetail;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class ThalamandetailResource extends Resource
{
    protected static ?string $model = ThalamanDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Detail Halaman'; 
    }
    public static function getPluralModelLabel(): string
    {
        return 'Detail Halaman'; 
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_halaman_detail')
                    ->label('Kode Halaman Detail')
                    ->required(),
                Forms\Components\TextInput::make('kode_otoritas')
                    ->label('Kode Otoritas')
                    ->required()
                    ->maxLength(15),
                Forms\Components\TextInput::make('kode_halaman')
                    ->label('Kode Halaman')
                    ->required()
                    ->maxLength(15),
                Forms\Components\Toggle::make('status_halaman_detail')
                    ->label('Status Halaman Detail')
                    ->onColor('success')
                    ->offColor('danger'),
            
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_halaman_detail')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kode_otoritas')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kode_halaman')->sortable()->searchable(),
                Tables\Columns\IconColumn::make('status_halaman_detail')
                ->label('Status')
                ->boolean()
                ->trueIcon('heroicon-o-check-circle')
                ->trueColor('success')
                ->falseIcon('heroicon-o-x-circle')
                ->falseColor('danger'),
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
            'index' => Pages\ListThalamandetail::route('/'),
            'create' => Pages\CreateThalamandetail::route('/create'),
            'edit' => Pages\EditThalamandetail::route('/{record}/edit'),
        ];
    }
}
