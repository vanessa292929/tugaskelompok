<?php

namespace App\Filament\Resources\ThalamandetailResource\Pages;

use App\Filament\Resources\ThalamandetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditThalamandetail extends EditRecord
{
    protected static string $resource = ThalamandetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
