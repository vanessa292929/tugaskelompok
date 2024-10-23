<?php

namespace App\Filament\Resources\TpegawaiResource\Pages;

use App\Filament\Resources\TpegawaiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTpegawai extends ListRecords
{
    protected static string $resource = TpegawaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
