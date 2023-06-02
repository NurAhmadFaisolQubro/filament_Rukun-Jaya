<?php

namespace App\Filament\Resources\StokMlgResource\Widgets;

use App\Models\StokMlg;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StokStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $stokMlg = StokMlg::where('cabang', 'Malang')->sum('total_stok');
        return [Card::make('Stok Malang', $stokMlg. ' Bal'),
        ];
    }
}
