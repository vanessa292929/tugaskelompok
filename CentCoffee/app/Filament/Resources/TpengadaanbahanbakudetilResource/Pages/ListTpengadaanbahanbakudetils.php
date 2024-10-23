<?php

namespace App\Filament\Resources\TpengadaanbahanbakudetilResource\Pages;

use App\Filament\Resources\TpengadaanbahanbakudetilResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTpengadaanbahanbakudetils extends ListRecords
{
    protected static string $resource = TpengadaanbahanbakudetilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
