<?php

namespace App\Filament\Resources\TmenudetailResource\Pages;

use App\Filament\Resources\TmenudetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTmenudetail extends ListRecords
{
    protected static string $resource = TmenudetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
