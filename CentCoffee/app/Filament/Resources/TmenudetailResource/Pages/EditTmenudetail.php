<?php

namespace App\Filament\Resources\TmenudetailResource\Pages;

use App\Filament\Resources\TmenudetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTmenudetail extends EditRecord
{
    protected static string $resource = TmenudetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
