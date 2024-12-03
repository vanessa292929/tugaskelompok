<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TmenudetailResource\Pages;
use App\Models\Tmenudetail;
use App\Imports\TMenuDetailsImport;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\EditAction;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;

class TmenudetailResource extends Resource
{
    protected static ?string $model = Tmenudetail::class;
    protected static ?string $navigationLabel = 'Menu Detail';
    protected static ?string $navigationIcon = 'heroicon-o-document';
    protected static ?string $navigationGroup = 'Data Menu';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('kode_menu_detail')
                ->label('Kode Menu Detail')
                ->required()
                ->maxLength(15)
                ->unique(ignoreRecord: true),
            Forms\Components\TextInput::make('jumlah_bahan_baku_detail')
                ->label('Jumlah Bahan Baku Detail')
                ->required()
                ->numeric()
                ->minValue(0),
            Forms\Components\TextInput::make('kode_menu')
                ->label('Kode Menu')
                ->required()
                ->maxLength(15),
            Forms\Components\TextInput::make('kode_bahan_baku')
                ->label('Kode Bahan Baku')
                ->required()
                ->maxLength(15),
            Forms\Components\TextInput::make('menu_terjual')
                ->label('Menu Terjual')
                ->required()
                ->numeric()
                ->minValue(0),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('kode_menu_detail')
                ->label('Kode Menu Detail')
                ->sortable()
                ->searchable(),
            Tables\Columns\TextColumn::make('jumlah_bahan_baku_detail')
                ->label('Jumlah Bahan Baku Detail')
                ->sortable()
                ->searchable(),
            Tables\Columns\TextColumn::make('kode_menu')
                ->label('Kode Menu')
                ->sortable()
                ->searchable(),
            Tables\Columns\TextColumn::make('kode_bahan_baku')
                ->label('Kode Bahan Baku')
                ->sortable()
                ->searchable(),
            Tables\Columns\TextColumn::make('menu_terjual')
                ->label('Menu Terjual')
                ->sortable()
                ->searchable(),
        ])
        ->actions([
            EditAction::make(),
        ])
        ->headerActions([
            Action::make('importExcel')
                ->label('Import Excel')
                ->action(function (array $data) {
                    $filePath = storage_path('app/public/' . $data['file']);
                    Excel::import(new TMenuDetailsImport, $filePath);
                    Notification::make()
                        ->title('Data berhasil diimpor!')
                        ->success()
                        ->send();
                })
                ->form([
                    FileUpload::make('file')
                        ->label('Pilih File Excel')
                        ->disk('public')
                        ->directory('imports')
                        ->acceptedFileTypes(['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-excel'])
                        ->required(),
                ])
                ->modalHeading('Import Data Menu Detail')
                ->modalButton('Import')
                ->color('success'),
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
            ]),
        ]);
    }

    public static function getRelations(): array
    {
        return [];
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
