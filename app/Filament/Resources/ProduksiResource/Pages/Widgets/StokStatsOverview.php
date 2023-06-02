<?php

namespace App\Filament\Resources\ProduksiResource\Widgets;

use App\Models\Stok;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StokStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $stokPrb = Stok::where('cabang', 'Probolinggo')->sum('total_stok');
        $stokPsn = Stok::where('cabang', 'Pasuruan')->sum('total_stok');
        $stokstb = Stok::where('cabang', 'Situbondo')->sum('total_stok');
        $stokMlg = Stok::where('cabang', 'Malang')->sum('total_stok');
        $stokJbr = Stok::where('cabang', 'Jember')->sum('total_stok');
        $stokSlo = Stok::where('cabang', 'Solo')->sum('total_stok');
        return [
            Card::make('Stok Probolingggo', $stokPrb . ' Bal'),
            Card::make('Stok Pasuruan', $stokPsn . ' Bal'),
            Card::make('Stok Situbondo', $stokstb . ' Bal'),
            Card::make('Stok Solo', $stokSlo . ' Bal'),
            Card::make('Stok Jember', $stokJbr. ' Bal'),
            Card::make('Stok Solo', $stokSlo . ' Bal'),
        ];
    }
}
