<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TMenuResource\Pages;
use App\Models\TMenu;
use App\Imports\TMenuImport;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;

class TmenuResource extends Resource
{
    protected static ?string $model = TMenu::class;
    protected static ?string $navigationLabel = 'Daftar Menu';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Data Menu';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_menu')
                    ->label('Kode Menu')
                    ->required()
                    ->maxLength(15),
                Forms\Components\TextInput::make('nama_menu')
                    ->label('Nama Menu')
                    ->required(),    
                Forms\Components\Select::make('jenis_menu')
                    ->label('Jenis Menu')
                    ->options([
                        'F' => 'Food',
                        'D' => 'Drink',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('harga_menu')
                    ->label('Harga Menu')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('deskripsi_menu')
                    ->label('Deskripsi Menu')
                    ->required(),
                Forms\Components\FileUpload::make('gambar_menu')
                    ->label('Gambar Menu')
                    ->disk('public')
                    ->directory('images/menu')
                    ->required(),
                Forms\Components\TextInput::make('kode_pegawai')
                    ->label('Kode Pegawai')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_menu')
                    ->label('Kode Menu')
                    ->sortable()->searchable(),
                Tables\Columns\TextColumn::make('nama_menu')
                    ->label('Nama Menu')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_menu')
                    ->label('Jenis Menu')
                    ->sortable()->searchable(),
                Tables\Columns\TextColumn::make('harga_menu')
                    ->label('Harga Menu')
                    ->sortable()->searchable(),
                Tables\Columns\TextColumn::make('deskripsi_menu')
                    ->label('Deskripsi Menu')
                    ->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('gambar_menu')
                    ->label('Gambar Menu'),
                Tables\Columns\TextColumn::make('kode_pegawai')
                    ->label('Kode Pegawai')
                    ->sortable()->searchable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->headerActions([
                Action::make('importExcel')
                    ->label('Import Excel')
                    ->action(function (array $data) {
                        $filePath = storage_path('app/public/' . $data['file']);
                        Excel::import(new TMenuImport, $filePath);
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
                    ->modalHeading('Import Data Menu')
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
            'index' => Pages\ListTMenu::route('/'),
            'create' => Pages\CreateTMenu::route('/create'),
            'edit' => Pages\EditTMenu::route('/{record}/edit'),
        ];
    }
}
