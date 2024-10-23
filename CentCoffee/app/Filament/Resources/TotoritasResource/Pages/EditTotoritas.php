<?php

namespace App\Filament\Resources\TotoritasResource\Pages;

use App\Filament\Resources\TotoritasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTotoritas extends EditRecord
{
    protected static string $resource = TotoritasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
