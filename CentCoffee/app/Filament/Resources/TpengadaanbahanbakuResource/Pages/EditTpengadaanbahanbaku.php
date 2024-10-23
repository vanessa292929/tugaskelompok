<?php

namespace App\Filament\Resources\TpengadaanbahanbakuResource\Pages;

use App\Filament\Resources\TpengadaanbahanbakuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTpengadaanbahanbaku extends EditRecord
{
    protected static string $resource = TpengadaanbahanbakuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
