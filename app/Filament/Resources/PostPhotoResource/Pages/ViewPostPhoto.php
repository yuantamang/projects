<?php

namespace App\Filament\Resources\PostPhotoResource\Pages;

use App\Filament\Resources\PostPhotoResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPostPhoto extends ViewRecord
{
    protected static string $resource = PostPhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
