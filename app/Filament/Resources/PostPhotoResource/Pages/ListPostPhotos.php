<?php

namespace App\Filament\Resources\PostPhotoResource\Pages;

use App\Filament\Resources\PostPhotoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPostPhotos extends ListRecords
{
    protected static string $resource = PostPhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
