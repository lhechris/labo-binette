<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use App\Models\Categorie;

class CategorieForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->label('Titre'),
                Select::make('parent_id')
                        ->label('Categorie parente')
                        ->options(Categorie::all()->pluck('title', 'id'))
                        ->searchable(),                    
                Textarea::make('content')
                    ->label("Texte")
                    ->columnSpanFull(),
            ]);
    }
}
