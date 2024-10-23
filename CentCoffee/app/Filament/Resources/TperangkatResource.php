<?php
// DONE
namespace App\Filament\Resources;

use App\Filament\Resources\TperangkatResource\Pages;
use App\Filament\Resources\TperangkatResource\RelationManagers;
use App\Models\tperangkat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;

class TperangkatResource extends Resource
{
    protected static ?string $model = tperangkat::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Perangkat';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Perangkat';
    }

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
        
        Forms\Components\TextInput::make('kode_perangkat') 
            ->label('Kode Perangkat')
            ->required()
            ->maxLength(15),

        Forms\Components\TextInput::make('kata_sandi_perangkat')
            ->label('Kata Sandi Perangkat')
            
            ->required()
            ->maxLength(150),

        Forms\Components\TextInput::make('nama_perangkat')
            ->label('Nama Perangkat')
            ->required()
            ->maxLength(50),

        Forms\Components\TextInput::make('jumlah_kursi_perangkat')
            ->label('Jumlah Kursi Perangkat')
            ->numeric()
            ->required()
            ->minValue(0)
            ->maxValue(255), 

        Forms\Components\Toggle::make('status_perangkat')
            ->label('Status Perangkat')
            ->onColor('success')
            ->offColor('danger')
    ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([

                Tables\Columns\TextColumn::make('kode_perangkat')
                    ->label('Kode Perangkat')
                    ->searchable()
                    ->sortable(),
                
                    Tables\Columns\TextColumn::make('kata_sandi_perangkat')
                    ->label('Kata Sandi Perangkat')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('nama_perangkat')
                    ->label('Nama Perangkat')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('jumlah_kursi_perangkat')
                    ->label('Jumlah Kursi Perangkat')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\IconColumn::make('status_perangkat')
                    ->label('Status')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->trueColor('success')
                    ->falseIcon('heroicon-o-x-circle')
                    ->falseColor('danger'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTperangkat::route('/'),
            'create' => Pages\CreateTperangkat::route('/create'),
            'edit' => Pages\EditTperangkat::route('/{record}/edit'),
        ];
    }
}
