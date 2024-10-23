<?php

namespace App\Filament\Resources\ThalamanResource\Pages;

use App\Filament\Resources\ThalamanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditThalaman extends EditRecord
{
    protected static string $resource = ThalamanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
