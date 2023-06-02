<?php

namespace App\Filament\Widgets;

use App\Models\Setoran;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue; 
use Filament\Widgets\BarChartWidget;

class incomeCabangsChart extends BarChartWidget
{
    protected static ?string $heading = 'Penjualan Tiap Pabrik';
    protected static ?int $sort = 3;
    protected function getData(): array
    {
        $dataPrb = Trend::query(Setoran::where('acc', '1')->where('cabang', 'Probolinggo'))
            ->between(
                start: now()->startOfMonth(),
                end: now(),
            )
            ->perMonth()
            ->sum('nominal', 'Probolinggo');        
        $dataPsn = Trend::query(Setoran::where('acc', '1')->where('cabang', 'pasuruan'))
            ->between(
                start: now()->startOfMonth(),
                end: now(),
            )
            ->perMonth()
            ->sum('nominal','pasuruan');        
        $dataJbr = Trend::query(Setoran::where('acc', '1')->where('cabang', 'Jember'))
            ->between(
                start: now()->startOfMonth(),
                end: now(),
            )
            ->perMonth()
            ->sum('nominal','Jember');    
        $dataSlo = Trend::query(Setoran::where('acc', '1')->where('cabang', 'Solo'))
            ->between(
                start: now()->startOfMonth(),
                end: now(),
            )
            ->perMonth()
            ->sum('nominal','Solo');        
        $dataMlg = Trend::query(Setoran::where('acc', '1')->where('cabang', 'Malang'))
            ->between(
                start: now()->startOfMonth(),
                end: now(),
            )
            ->perMonth()
            ->sum('nominal','Malang');        
        $dataStb = Trend::query(Setoran::where('acc', '1')->where('cabang', 'Situbondo'))
            ->between(
                start: now()->startOfMonth(),
                end: now(),
            )
            ->perMonth()
            ->sum('nominal','Situbondo');    
            return [
                'datasets' => [
                    [
                        'label' => 'Malang',
                        'data' => $dataMlg->map(fn (TrendValue $value) => $value->aggregate),
                        'backgroundColor' =>  [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                          ],
                          'borderColor' => [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                          ],
                          'borderWidth' => 2,
                          'borderRadius' => 50,
                    ],
                    [
                        'label' => 'Probolinggo',
                        'data' => $dataPrb->map(fn (TrendValue $value) => $value->aggregate),
                        'backgroundColor' =>  [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                          ],
                          'borderColor' => [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                          ],
                          'borderWidth' => 2,
                          'borderRadius' => 50,
                    ],
                    [
                        'label' => 'Pasuruan',
                        'data' => $dataPsn->map(fn (TrendValue $value) => $value->aggregate),
                        'backgroundColor' =>  [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                          ],
                          'borderColor' => [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                          ],
                          'borderWidth' => 2,
                          'borderRadius' => 50,
                    ],
                    [
                        'label' => 'Solo',
                        'data' => $dataSlo->map(fn (TrendValue $value) => $value->aggregate),
                        'backgroundColor' =>  [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                          ],
                          'borderColor' => [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                          ],
                          'borderWidth' => 2,
                          'borderRadius' => 50,
                    ],
                    [
                        'label' => 'Situbondo',
                        'data' => $dataStb->map(fn (TrendValue $value) => $value->aggregate),
                        'backgroundColor' =>  [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                          ],
                          'borderColor' => [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                          ],
                          'borderWidth' => 2,
                          'borderRadius' => 50,
                    ],
                    [
                        'label' => 'Jember',
                        'categories' => 'Jan',
                        'data' =>  $dataJbr->map(fn (TrendValue $value) => $value->aggregate),
                        'backgroundColor' =>  [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                          ],
                          'borderColor' => [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                          ],
                          
                          'borderWidth' => 2,
                          'borderRadius' => 50,
                        ],
                    ],
                'labels' =>$dataPsn->map(fn (TrendValue $value) => $value->date),
            ];
}
}

