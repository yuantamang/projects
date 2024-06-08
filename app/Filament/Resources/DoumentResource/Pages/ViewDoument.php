<?php

namespace App\Filament\Resources\DoumentResource\Pages;

use App\Filament\Resources\DoumentResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDoument extends ViewRecord
{
    protected static string $resource = DoumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
