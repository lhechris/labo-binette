<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\CodeEditor\Enums\Language;
use App\Models\Categorie;


class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([ 
                Select::make('categorie_id')
                        ->label('Categorie')
                        ->options(Categorie::all()->pluck('title', 'id'))
                        ->searchable(),
                TextInput::make('title')->required(),
                TextInput::make('summary'),
                FileUpload::make('image')
                        ->image()
                        ->imageEditor()
                        ->disk('public') 
                        ->directory('articles')
                        ->visibility('public'),
                
                Select::make('content_type')
                    ->label('Type de contenu')
                    ->options([
                        'html' => 'Texte (Rich Editor)',
                        'svg'  => 'SVG',
                    ])
                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                        if ($state === 'svg') {
                            if (blank($get('content_svg')) && filled($get('content_text'))) {
                                $set('content_svg', $get('content_text'));
                            }
                        }
                        if ($state === 'html') {
                            if (blank($get('content_text')) && filled($get('content_svg'))) {
                                $set('content_text', $get('content_svg'));
                            }
                        }
                    })

                    ->default('html')
                    ->required()
                    ->reactive(),

                RichEditor::make('content_text')
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
                    ->visible(fn ($get) => $get('content_type') === 'html'),

                CodeEditor::make('content_svg')
                    ->label('SVG')
                    ->language(Language::Xml)
                    ->columnSpanFull()
                    ->visible(fn ($get) => $get('content_type') === 'svg')
                    ->helperText('SVG inline (<svg>...</svg>)')
                    
                /*TextArea::make('content_svg')
                    ->label('SVG')
                    ->rows(12)
                    ->columnSpanFull()
                    ->visible(fn ($get) => $get('content_type') === 'svg')
                    ->extraAttributes([
                        'style' => 'font-family: monospace',
                    ])
                    ->helperText('Collez ici un SVG inline (<svg>...</svg>)')*/

            ]);
    }

}
