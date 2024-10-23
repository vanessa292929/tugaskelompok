<?php

namespace App\Filament\Resources\TmenuResource\Pages;

use App\Filament\Resources\TmenuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTmenu extends ListRecords
{
    protected static string $resource = TmenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
