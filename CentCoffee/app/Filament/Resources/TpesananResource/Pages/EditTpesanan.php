<?php

namespace App\Filament\Resources\TpesananResource\Pages;

use App\Filament\Resources\TpesananResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTpesanan extends EditRecord
{
    protected static string $resource = TpesananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
