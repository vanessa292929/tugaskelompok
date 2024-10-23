<?php

namespace App\Filament\Resources\TprioritasResource\Pages;

use App\Filament\Resources\TprioritasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTprioritas extends EditRecord
{
    protected static string $resource = TprioritasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
