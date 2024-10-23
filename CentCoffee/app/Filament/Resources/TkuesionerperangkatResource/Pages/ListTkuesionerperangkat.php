<?php

namespace App\Filament\Resources\TkuesionerperangkatResource\Pages;

use App\Filament\Resources\TkuesionerperangkatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTkuesionerperangkat extends ListRecords
{
    protected static string $resource = TkuesionerperangkatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
