<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use App\Models\PostPhoto;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PostOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalPostPhoto =PostPhoto::count();
        return [
            stat::make("Total Post Photo", $totalPostPhoto)
        ];
    }
}
