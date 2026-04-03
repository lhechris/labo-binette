<?php

namespace App\Filament\Resources\Accueils\Pages;

use App\Filament\Resources\Accueils\AccueilResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAccueil extends EditRecord
{
    protected static string $resource = AccueilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
