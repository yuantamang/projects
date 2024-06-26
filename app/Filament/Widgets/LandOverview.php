<?php

namespace App\Filament\Widgets;

use App\Models\Landscape;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class LandOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalLand =Landscape::count();
        return [
            stat::make("Total Landscape photos",$totalLand)
        ];
    }
}
