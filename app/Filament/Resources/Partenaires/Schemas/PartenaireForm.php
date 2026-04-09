<?php

namespace App\Filament\Resources\Partenaires\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class PartenaireForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->label("Nom"),
                FileUpload::make('image')
                        ->image()
                        ->imageEditor()
                        ->disk('public') 
                        ->directory('partenaires')
                        ->visibility('public'),
                Textarea::make('content')
                    ->label('Texte'),
                TextInput::make('type')
                    ->label('asso/partenaire'),
                TextInput::make('order')
                    ->integer()
                    ->required()
                    ->label('ordre'),
            ]);
    }
}
