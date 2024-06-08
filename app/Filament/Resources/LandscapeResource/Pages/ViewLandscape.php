<?php

namespace App\Filament\Resources\LandscapeResource\Pages;

use App\Filament\Resources\LandscapeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLandscape extends ViewRecord
{
    protected static string $resource = LandscapeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
