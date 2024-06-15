<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PhotoOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalEvent =Event::count();
        return [
            stat("Total Event Photo", $totalEvent)
        ];
    }
}
