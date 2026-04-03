<?php

namespace App\Filament\Resources\Accueils\Pages;

use App\Filament\Resources\Accueils\AccueilResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAccueils extends ListRecords
{
    protected static string $resource = AccueilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
