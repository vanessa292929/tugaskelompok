<?php

namespace App\Filament\Resources\TkuesionerResource\Pages;

use App\Filament\Resources\TkuesionerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTkuesioner extends ListRecords
{
    protected static string $resource = TkuesionerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
