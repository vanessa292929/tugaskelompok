<?php

namespace App\Filament\Resources\TkuesionerdetailResource\Pages;

use App\Filament\Resources\TkuesionerdetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTkuesionerdetail extends ListRecords
{
    protected static string $resource = TkuesionerdetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
