<?php

namespace App\Filament\Resources\TpemberitahuanResource\Pages;

use App\Filament\Resources\TpemberitahuanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTpemberitahuan extends EditRecord
{
    protected static string $resource = TpemberitahuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
