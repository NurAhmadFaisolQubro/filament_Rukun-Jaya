<?php

namespace App\Filament\Resources\StokJbrResource\Widgets;

use App\Models\StokJbr;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StokStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $stokJbr = StokJbr::where('cabang', 'Jember')->sum('total_stok');
        return [Card::make('Stok Jember', $stokJbr. ' Bal'),
        ];
    }
}
