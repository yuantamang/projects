<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ImageChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Images created',
                    'data' => [2,1,0,0,00],
                ],
            ],
            'labels' => ['Wed', 'Post', 'Event', 'Doc', 'Cus'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
