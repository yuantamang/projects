<?php

namespace App\Filament\Widgets;

use App\Models\Doument;
use App\Models\Event;
use App\Models\PostPhoto;
use App\Models\Wedding;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class WeddingOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalWedding =Wedding::count();

        return [
            stat::make("Total wed photo", $totalWedding)

        ];
    }
}
