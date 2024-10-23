<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TkuesionerResource\Pages;
use App\Filament\Resources\TkuesionerResource\RelationManagers;
use App\Models\tkuesioner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\DatePicker;

class TkuesionerResource extends Resource
{
    protected static ?string $model = tkuesioner::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Kuesioner'; 
    }
    public static function getPluralModelLabel(): string
    {
        return 'Kuesioner'; 
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('kode_kuisoner')
                ->required()
                ->label('Kode Kuesioner'),

            Forms\Components\TextInput::make('judul_kuisioner')
                ->required()
                ->label('Judul Kuesioner'),

            Forms\Components\TextInput::make('isi_kuisioner')
                ->required()
                ->label('Isi Kuesioner'),

            Forms\Components\DatePicker::make('tanggal_kuisioner')
                ->required()
                ->label('Tanggal Kuesioner')
                ->displayFormat('d/m/Y'),

            Forms\Components\TimePicker::make('waktu_kuisioner')
                ->required()
                ->label('Waktu Kuesioner')
                ->displayFormat('h:i A'),

                            
            Forms\Components\Toggle::make('status_kuisioner')
                ->label('Status Kuisioner')
                ->onIcon('heroicon-s-check') // This is a valid Heroicons v1 icon
                ->offIcon('heroicon-o-x-circle') // Use a valid icon here
                ->required(),

            Forms\Components\TextInput::make('kode_pegawai')
                ->required()
                ->label('Kode Pegawai'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('kode_kuisioner')->label('Kode Kuesioner')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('judul_kuisioner')->label('Judul Kuesioner')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('isi_kuisioner')->label('Isi Kuesioner')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('tanggal_kuisioner')->label('Tanggal Kuesioner')->sortable()->searchable(),
            Tables\Columns\IconColumn::make('status_kuisioner')
                ->label('Status')
                ->boolean()
                ->trueIcon('heroicon-o-check-circle')
                ->trueColor('success')
                ->falseIcon('heroicon-o-x-circle')
                ->falseColor('danger'),
            Tables\Columns\TextColumn::make('kode_pegawai')->label('Kode_pegawai')->sortable()->searchable(),
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
            'index' => Pages\ListTkuesioner::route('/'),
            'create' => Pages\CreateTkuesioner::route('/create'),
            'edit' => Pages\EditTkuesioner::route('/{record}/edit'),
        ];
    }
}
