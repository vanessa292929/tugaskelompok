<?php

namespace App\Filament\Resources\TprioritasResource\Pages;

use App\Filament\Resources\TprioritasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTprioritas extends ListRecords
{
    protected static string $resource = TprioritasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
