<?php

namespace App\Filament\Resources\Accueils\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class AccueilsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order')
                    ->searchable()
                    ->label('Ordre'),
                TextColumn::make('accueilable.title')
                    ->searchable()
                    ->label('Identifiant'),
                TextColumn::make('accueilable_type')
                    ->searchable()
                    ->label('Type'),
                TextColumn::make('option')
                    ->searchable(),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
