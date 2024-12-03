<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TBahanBakuResource\Pages;
use App\Models\TBahanBaku;
use App\Imports\TBahanBakuImport;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;

class TbahanbakuResource extends Resource
{
    protected static ?string $model = TBahanBaku::class;
    protected static ?string $navigationLabel = 'Daftar Bahan Baku';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Data Bahan Baku';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_bahan_baku')
                    ->label('Kode Bahan Baku')
                    ->required()
                    ->maxLength(15),
                Forms\Components\TextInput::make('nama_bahan_baku')
                    ->label('Nama Bahan Baku')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('stok_bahan_baku')
                    ->label('Stok Bahan Baku')
                    ->required()
                    ->numeric()
                    ->minValue(0),
                Forms\Components\TextInput::make('satuan_bahan_baku')
                    ->label('Satuan Bahan Baku')
                    ->required()
                    ->maxLength(10),
                Forms\Components\DateTimePicker::make('tanggal_kadaluarsa_bahan_baku')
                    ->label('Tanggal Kadaluarsa Bahan Baku')
                    ->required()
                    ->date(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_bahan_baku')
                    ->label('Kode Bahan Baku')
                    ->sortable()->searchable(),
                Tables\Columns\TextColumn::make('nama_bahan_baku')
                    ->label('Nama Bahan Baku')
                    ->sortable()->searchable(),
                Tables\Columns\TextColumn::make('stok_bahan_baku')
                    ->label('Stok Bahan Baku')
                    ->sortable()->searchable(),
                Tables\Columns\TextColumn::make('satuan_bahan_baku')
                    ->label('Satuan Bahan Baku')
                    ->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tanggal_kadaluarsa_bahan_baku')
                    ->label('Tanggal Kadaluarsa Bahan Baku')
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
                        Excel::import(new TBahanBakuImport, $filePath);
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
                            ->acceptedFileTypes([
                                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', // .xlsx
                                'application/vnd.ms-excel', // .xls
                                'application/octet-stream', // Beberapa browser membaca file sebagai octet-stream
                                'application/vnd.ms-office' // Format umum lainnya untuk Excel
                            ])
                            
                            ->required(),
                    ])
                    ->modalHeading('Import Data Bahan Baku')
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTBahanBaku::route('/'),
            'create' => Pages\CreateTBahanBaku::route('/create'),
            'edit' => Pages\EditTBahanBaku::route('/{record}/edit'),
        ];
    }
}
