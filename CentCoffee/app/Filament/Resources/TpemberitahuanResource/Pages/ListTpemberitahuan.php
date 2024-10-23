<?php

namespace App\Filament\Resources\TpemberitahuanResource\Pages;

use App\Filament\Resources\TpemberitahuanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTpemberitahuan extends ListRecords
{
    protected static string $resource = TpemberitahuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
