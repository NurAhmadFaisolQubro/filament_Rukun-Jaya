<?php

namespace App\Filament\Resources\StokJbrResource\Widgets;

use App\Models\StokPsn;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StokStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $stokJbr = StokPsn::where('cabang', 'Pasuruan')->sum('total_stok');
        return [Card::make('Stok Pasuruan', $stokJbr. ' Bal'),
        ];
    }
}
