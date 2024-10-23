<?php

namespace App\Filament\Resources\TkuesionerperangkatResource\Pages;

use App\Filament\Resources\TkuesionerperangkatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTkuesionerperangkat extends EditRecord
{
    protected static string $resource = TkuesionerperangkatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
