<?php

namespace App\Filament\Widgets;

use App\Models\Doument;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DoumentOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalDoument =Doument::count();
       return [
        stat::make("Total Document",$totalDoument)
    ];
    }
}
