<?php

namespace App\Filament\Resources\TbahanbakuResource\Pages;

use App\Filament\Resources\TbahanbakuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTbahanbaku extends ListRecords
{
    protected static string $resource = TbahanbakuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
