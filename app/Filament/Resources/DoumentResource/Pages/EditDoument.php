<?php

namespace App\Filament\Resources\DoumentResource\Pages;

use App\Filament\Resources\DoumentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDoument extends EditRecord
{
    protected static string $resource = DoumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
