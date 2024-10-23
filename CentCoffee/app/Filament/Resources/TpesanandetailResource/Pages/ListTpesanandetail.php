<?php

namespace App\Filament\Resources\TpesanandetailResource\Pages;

use App\Filament\Resources\TpesanandetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTpesanandetail extends ListRecords
{
    protected static string $resource = TpesanandetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
