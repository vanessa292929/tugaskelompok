<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TotoritasResource\Pages;
use App\Models\Totoritas;
use App\Imports\TotoritasImport;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;

class TotoritasResource extends Resource
{
    protected static ?string $model = Totoritas::class;
    protected static ?string $navigationLabel = 'Daftar Otoritas';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Data Otoritas';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('kode_otoritas')
                ->label('Kode Otoritas')
                ->required()
                ->maxLength(15),
            Forms\Components\TextInput::make('nama_otoritas')
                ->label('Nama Otoritas')
                ->required()
                ->maxLength(100),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('kode_otoritas')
                ->label('Kode Otoritas')
                ->sortable()->searchable(),
            Tables\Columns\TextColumn::make('nama_otoritas')
                ->label('Nama Otoritas')
                ->sortable()->searchable(),
        ])
        ->actions([
            Tables\Actions\EditAction::make()
        ])
        ->headerActions([
            Action::make('importExcel')
                ->label('Import Excel')
                ->action(function (array $data) {
                    $filePath = storage_path('app/public/' . $data['file']);
                    Excel::import(new TotoritasImport, $filePath);
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
                ->modalHeading('Import Data Otoritas')
                ->modalButton('Import')
                ->color('success'),
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
