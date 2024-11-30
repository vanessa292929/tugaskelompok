<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TPengadaanBahanBakuResource\Pages;
use App\Models\TPengadaanBahanBaku;
use App\Imports\TPengadaanBahanBakuImport;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;

class TPengadaanBahanBakuResource extends Resource
{
    protected static ?string $model = TPengadaanBahanBaku::class;
    protected static ?string $navigationLabel = 'Pengadaan Bahan Baku';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Data Pengadaan';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('kode_pengadaan_bahan_baku')
                ->label('Kode Pengadaan')
                ->required()
                ->maxLength(15),
            Forms\Components\TextInput::make('subjek_pengadaan_bahan_baku')
                ->label('Subjek Pengadaan')
                ->required()
                ->maxLength(50),
            Forms\Components\DatePicker::make('tanggal_pengadaan_bahan_baku')
                ->label('Tanggal Pengadaan')
                ->required()
                ->displayFormat('d/m/Y'),
            Forms\Components\TimePicker::make('waktu_pengadaan_bahan_baku')
                ->label('Waktu Pengadaan')
                ->required()
                ->displayFormat('H:i'),
            Forms\Components\Textarea::make('catatan_pengadaan_bahan_baku')
                ->label('Catatan')
                ->required(),
            Forms\Components\Select::make('status_pengadaan_bahan_baku')
                ->label('Status Pengadaan')
                ->required()
                ->options([
                    'Pending' => 'Pending',
                    'Selesai' => 'Selesai',
                ]),
            Forms\Components\TextInput::make('kode_pegawai')
                ->label('Kode Pegawai')
                ->required()
                ->maxLength(15),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('kode_pengadaan_bahan_baku')
                ->label('Kode Pengadaan')
                ->sortable()->searchable(),
            Tables\Columns\TextColumn::make('subjek_pengadaan_bahan_baku')
                ->label('Subjek Pengadaan')
                ->sortable()->searchable(),
            Tables\Columns\TextColumn::make('tanggal_pengadaan_bahan_baku')
                ->label('Tanggal Pengadaan')
                ->sortable()->searchable(),
            Tables\Columns\TextColumn::make('waktu_pengadaan_bahan_baku')
                ->label('Waktu Pengadaan')
                ->sortable()->searchable(),
            Tables\Columns\TextColumn::make('catatan_pengadaan_bahan_baku')
                ->label('Catatan')
                ->sortable()->searchable(),
            Tables\Columns\TextColumn::make('status_pengadaan_bahan_baku')
                ->label('Status Pengadaan')
                ->sortable()->searchable(),
            Tables\Columns\TextColumn::make('kode_pegawai')
                ->label('Kode Pegawai')
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
                    Excel::import(new TPengadaanBahanBakuImport, $filePath);
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
                ->modalHeading('Import Data Pengadaan Bahan Baku')
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
            'index' => Pages\ListTPengadaanBahanBaku::route('/'),
            'create' => Pages\CreateTPengadaanBahanBaku::route('/create'),
            'edit' => Pages\EditTPengadaanBahanBaku::route('/{record}/edit'),
        ];
    }
}
