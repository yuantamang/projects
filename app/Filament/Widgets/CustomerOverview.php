<?php

namespace App\Filament\Widgets;

use App\Models\Customer;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CustomerOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalCustomer =Customer::count();
        return [
            stat::make("Total Numbers of Customers",$totalCustomer)
        ];
    }
}
