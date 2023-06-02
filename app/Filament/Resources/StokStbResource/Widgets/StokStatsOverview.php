<?php

namespace App\Filament\Resources\StokStbResource\Widgets;

use App\Models\StokStb;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StokStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $stokMlg = StokStb::where('cabang', 'Situbondo')->sum('total_stok');
        return [Card::make('Stok Situbondo', $stokMlg. ' Bal'),
        ];
    }
}
