<?php

namespace App\Filament\Resources\TkuesionerResource\Pages;

use App\Filament\Resources\TkuesionerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTkuesioner extends EditRecord
{
    protected static string $resource = TkuesionerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
