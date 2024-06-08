<?php

namespace App\Filament\Resources\PostPhotoResource\Pages;

use App\Filament\Resources\PostPhotoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPostPhoto extends EditRecord
{
    protected static string $resource = PostPhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
