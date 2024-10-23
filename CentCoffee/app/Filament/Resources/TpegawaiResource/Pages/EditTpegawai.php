<?php

namespace App\Filament\Resources\TpegawaiResource\Pages;

use App\Filament\Resources\TpegawaiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTpegawai extends EditRecord
{
    protected static string $resource = TpegawaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
