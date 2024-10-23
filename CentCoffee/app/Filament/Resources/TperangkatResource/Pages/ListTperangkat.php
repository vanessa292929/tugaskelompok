<?php

namespace App\Filament\Resources\TperangkatResource\Pages;

use App\Filament\Resources\TperangkatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTperangkat extends ListRecords
{
    protected static string $resource = TperangkatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
