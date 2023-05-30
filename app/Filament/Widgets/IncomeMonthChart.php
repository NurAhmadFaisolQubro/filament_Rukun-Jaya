<?php

namespace App\Filament\Widgets;

use App\Models\Setoran;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class IncomeMonthChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static ?int $sort = 2;
    protected static string $chartId = 'incomeMonthChart';

    protected static ?int $contentHeight = 253; //px
    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Penjualan Bulanan ';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {
        $data = Trend::query(Setoran::where('acc', '1'))
            ->between(
                start: now()->startOfYear(),
                end: now(),
            )
            ->perMonth()
            ->sum('nominal');
        return [
            'chart' => [
                'type' => 'area',
                'height' => 250,
                'toolbar' => [
                    'show' => false,
                ],
            ],
            'series' => [
                [
                    'name' => 'Series 1',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                    'labels' => $data->map(fn (TrendValue $value) => $value->date),
                ],
                // [
                //     'name' => 'Series 2',
                //     'data' => [18, 28, 34, 36, 26, 28, 24, 24, 26, 20, 32, 20],
                // ],

            ],
            'xaxis' => [
                'categories' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                'labels' => [
                    'style' => [
                        'colors' => '#9ca3af',
                        'fontWeight' => 100,
                    ],
                ],
            ],
            'yaxis' => [
                'labels' => [
                    'style' => [
                        'colors' => '#9ca3af',
                        'fontWeight' => 100,
                    ],
                ],
            ],
            'legend' => [
                'labels' => [
                    'colors' => '#9ca3af',
                    'fontWeight' => 100,
                ],
            ],
            'colors' => ['#6366f1', '#22d3ee'],
            'stroke' => [
                'curve' => 'smooth',
            ],
            'dataLabels' => [
                'enabled' => false,
            ],
            'annotations' => [
                'yaxis' => [
                    [
                        // 'y' => 30,
                        // 'borderColor' => '#f43f5e',
                        // 'borderWidth' => '5',
                        // 'label' => [
                        //     'offsetX' => -6,
                        //     'offsetY' => -13,
                        //     'borderColor' => '#f43f5e',
                        //     'style' => [
                        //         'color' => '#fffbeb',
                        //         'background' => '#f43f5e',
                        //     ],
                            // 'text' => 'Label Example',
                        // ],
                    ],
                ],
            ],
        ];
    }
    }

