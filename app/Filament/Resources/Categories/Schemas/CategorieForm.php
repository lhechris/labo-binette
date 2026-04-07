<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CategorieForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->label("Nom"),
                TextInput::make('title')
                    ->required()
                    ->label('Titre'),
                TextInput::make('parent')
                    ->label('Categorie parente'),
                Textarea::make('content')
                    ->label("Texte")
                    ->columnSpanFull(),
            ]);
    }
}
