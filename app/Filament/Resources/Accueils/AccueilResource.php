<?php

namespace App\Filament\Resources\Accueils;

use App\Models\Accueil;
use App\Filament\Resources\Accueils\Pages\CreateAccueil;
use App\Filament\Resources\Accueils\Pages\EditAccueil;
use App\Filament\Resources\Accueils\Pages\ListAccueils;
use App\Filament\Resources\Accueils\Schemas\AccueilForm;
use App\Filament\Resources\Accueils\Tables\AccueilsTable;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AccueilResource extends Resource
{
    protected static ?string $model = Accueil::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return AccueilForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AccueilsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAccueils::route('/'),
            'create' => CreateAccueil::route('/create'),
            'edit' => EditAccueil::route('/{record}/edit'),
        ];
    }
}
