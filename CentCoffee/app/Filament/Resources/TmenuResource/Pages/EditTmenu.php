<?php

namespace App\Filament\Resources\TmenuResource\Pages;

use App\Filament\Resources\TmenuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTmenu extends EditRecord
{
    protected static string $resource = TmenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
