<?php

namespace App\Filament\Resources\Accueils\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class AccueilForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('accueilable_id')
                    ->required()
                    ->label("identifiant"),
                TextInput::make('accueilable_type')
                    ->required()
                    ->label('Type'),
                TextInput::make('order')
                    ->label("ordre d'affichage"),
                TextInput::make('option')
                    ->label("options"),
            ]);
    }
}
