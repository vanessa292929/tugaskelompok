<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TpesanandetailResource\Pages;
use App\Models\tpesananDetail;
use App\Imports\TPesananDetailsImport; 
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;

class TpesanandetailResource extends Resource
{
    protected static ?string $model = tpesananDetail::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Pesanan Detail';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Pesanan Detail';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_pesanan_detail')
                    ->label('Kode Pesanan Detil')
                    ->required()
                    ->placeholder('Kode Pesanan Detail'),

                Forms\Components\TextInput::make('kode_menu')
                    ->label('Kode Menu')
                    ->required()
                    ->placeholder('Kode Menu'),

                Forms\Components\TextInput::make('kode_pesanan')
                    ->label('Kode Pesanan')
                    ->required()
                    ->placeholder('Kode Pesanan'),

                Forms\Components\TextInput::make('jumlah_pesanan_detail')
                    ->label('Jumlah Pesanan Detail')
                    ->required()
                    ->numeric()
                    ->minValue(0),
                Forms\Components\Select::make('status_pesanan_detail')
                    ->label('Status Pesanan Detail')
                    ->options([
                        'P' => 'Pending',
                        'D' => 'Delivered',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('total_harga')
                    ->label('Total Harga')
                    ->required()
                    ->minValue(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_pesanan_detail')
                    ->label('Kode Pesanan Detil')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_menu')
                    ->label('Kode Menu')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_pesanan')
                    ->label('Kode Pesanan')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_pesanan_detail')
                    ->label('Jumlah Pesanan Detil')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('status_pesanan_detail')
                    ->label('Status Pesanan Detil')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('total_harga')
                    ->label('Total Harga')
                    ->sortable()
                    ->searchable()
            ])
            ->filters([])
            ->headerActions([
                Action::make('importExcel')
                    ->label('Import Excel')
                    ->action(function (array $data) {
                        $filePath = storage_path('app/public/' . $data['file']);

                        Excel::import(new TPesananDetailsImport, $filePath);

                        Notification::make()
                            ->title('Data Pesanan Detail berhasil diimpor!')
                            ->success()
                            ->send();
                    })
                    ->form([
                        FileUpload::make('file')
                            ->label('Pilih File Excel')
                            ->disk('public') 
                            ->directory('imports') 
                            ->acceptedFileTypes([
                                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                                'application/vnd.ms-excel',
                            ])
                            ->required(),
                    ])
                    ->modalHeading('Import Data Pesanan Detail')
                    ->modalButton('Import')
                    ->color('success'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTpesananDetail::route('/'),
            'create' => Pages\CreateTpesananDetail::route('/create'),
            'edit' => Pages\EditTpesananDetail::route('/{record}/edit'),
        ];
    }
}
