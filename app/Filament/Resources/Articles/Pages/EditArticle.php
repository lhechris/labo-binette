<?php

namespace App\Filament\Resources\Articles\Pages;

use App\Filament\Resources\Articles\ArticleResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditArticle extends EditRecord
{
    protected static string $resource = ArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        if ($data['content_type'] === 'svg') {
            $data['content_svg'] = $data['content'] ?? null;
        } else {
            $data['content_text'] = $data['content'] ?? null;
        }

        return $data;
    }


    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['content'] = $data['content_type'] === 'svg'
            ? $data['content_svg']
            : $data['content_text'];

        unset($data['content_text'], $data['content_svg']);

        return $data;
    }

}
