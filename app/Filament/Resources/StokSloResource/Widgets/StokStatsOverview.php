<?php

namespace App\Filament\Resources\StokSloResource\Widgets;

use App\Models\StokSlo;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StokStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $stokMlg = StokSlo::where('cabang', 'Solo')->sum('total_stok');
        return [Card::make('Stok Solo', $stokMlg. ' Bal'),
        ];
    }
}
