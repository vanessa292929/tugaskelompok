<?php

namespace App\Filament\Resources\TpesanandetailResource\Pages;

use App\Filament\Resources\TpesanandetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTpesanandetail extends EditRecord
{
    protected static string $resource = TpesanandetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
