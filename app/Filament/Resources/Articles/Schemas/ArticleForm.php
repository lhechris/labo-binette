<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use App\Models\Categorie;


class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([ 
                Select::make('categorie')
                        ->label('Categorie')
                        ->options(Categorie::all()->pluck('title', 'name'))
                        ->searchable(),
                TextInput::make('title')->required(),
                TextInput::make('name')->required(),
                TextInput::make('summary'),
                FileUpload::make('image')
                        ->image()
                        ->imageEditor()
                        ->disk('public') 
                        ->directory('editor')
                        ->visibility('public'),
                RichEditor::make('content')
                ->columnSpanFull()
                ->toolbarButtons([
                    ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'link','textColor'],
                    ['h1','h2', 'h3'],
                    ['alignStart', 'alignCenter', 'alignEnd'],
                    ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                    ['grid', 'gridDelete'],
                    ['table', 'attachFiles'], 
                    ['undo', 'redo'],
                ])
                ->fileAttachmentsDisk('public')
                ->fileAttachmentsDirectory('editor')
                ->fileAttachmentsVisibility('public')
                ->formatStateUsing(fn($state) => is_array($state) ? json_encode($state) : $state)
                ->dehydrateStateUsing(fn($state) => $state)

            ]);
    }
}
