<?php

namespace App\Filament\Resources\TotoritasResource\Pages;

use App\Filament\Resources\TotoritasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTotoritas extends ListRecords
{
    protected static string $resource = TotoritasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
