<?php

namespace App\Filament\Resources\ThalamandetailResource\Pages;

use App\Filament\Resources\ThalamandetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListThalamandetail extends ListRecords
{
    protected static string $resource = ThalamandetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
