<?php

namespace App\Filament\Resources\TpesananResource\Pages;

use App\Filament\Resources\TpesananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTpesanan extends ListRecords
{
    protected static string $resource = TpesananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
