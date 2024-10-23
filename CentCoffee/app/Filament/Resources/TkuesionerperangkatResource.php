<?php
//DONE
namespace App\Filament\Resources;
use App\Filament\Resources\TkuesionerperangkatResource\RelationManagers;
use App\Filament\Resources\TkuesionerperangkatResource\Pages;
use App\Models\tkuesionerperangkat;
use Filament\Forms;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

class TkuesionerperangkatResource extends Resource
{
    protected static ?string $model = tkuesionerperangkat::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Kuesioner Perangkat'; 
    }

    public static function getPluralModelLabel(): string
    {
        return 'Kuesioner Perangkat'; 
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('kode_kuisioner_perangkat')
                ->required()
                ->label('Kode Kuisioner Perangkat'),

            Forms\Components\TextInput::make('pembeli_kuisioner_perangkat')
                ->required()
                ->label('Pembeli Kuisioner Peranngkat'),

            Forms\Components\TextInput::make('kode_perangkat')
                ->required()
                ->label('Kode Perangkat'),

            Forms\Components\TextInput::make('pesan_kuisioner_perangkat')
                ->required()
                ->label('Pesan Kuisioner Perangkat'),
            
            Forms\Components\DatePicker::make('tanggal_kuisioner_perangkat')
                ->required()
                ->displayFormat('Y-m-d')
                ->label('Tanggal Kuisioner Perangkat'),
            
            Forms\Components\TimePicker::make('waktu_kuisioner_perangkat')
                ->required()
                ->seconds(false)
                ->displayFormat('H:i')
                ->label('Waktu Kuisioner Perangkat'),
            
                Forms\Components\Toggle::make('status_kuisioner_perangkat')
                ->label('Status Kuesioner Perangkat')
                ->onIcon('heroicon-o-check-circle') // Changed to a valid Heroicons v1 icon
                ->offIcon('heroicon-o-x-circle') // Changed to a valid Heroicons v1 icon
                ->required()
            
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('kode_kuisioner_perangkat')
                    ->searchable()
                    ->label('Kode kuisioner perangkat'),
            
            Tables\Columns\TextColumn::make('pembeli_kuisioner_perangkat')
                    ->searchable()
                    ->label('Pembeli Kuisioner Perangkat'),

            Tables\Columns\TextColumn::make('kode_perangkat')
                    ->searchable()
                    ->label('Kode Perangkat'),
            
            Tables\Columns\TextColumn::make('pesan_kuisioner_perangkat')
                    ->searchable()
                    ->label('Pesan Kuisioner Perangkat'),

            Tables\Columns\TextColumn::make('tanggal_kuisioner_perangkat')
                    ->searchable()
                    ->label('Tanggal Kuisioner Perangkat'),

            Tables\Columns\TextColumn::make('waktu_kuisioner_perangkat')
                    ->searchable()
                    ->label('Waktu Kuisioner Perangkat'),

            Tables\Columns\IconColumn::make('status_kuisioner_perangkat')
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
            'index' => Pages\ListTkuesionerperangkat::route('/'),
            'create' => Pages\CreateTkuesionerperangkat::route('/create'),
            'edit' => Pages\EditTkuesionerperangkat::route('/{record}/edit'),
        ];
    }
}
