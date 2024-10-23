<?php

namespace App\Filament\Resources\TpengadaanbahanbakuResource\Pages;

use App\Filament\Resources\TpengadaanbahanbakuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTpengadaanbahanbaku extends ListRecords
{
    protected static string $resource = TpengadaanbahanbakuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
