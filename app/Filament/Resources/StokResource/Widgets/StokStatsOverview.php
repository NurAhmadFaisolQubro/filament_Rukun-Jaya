<?php

namespace App\Filament\Resources\StokResource\Widgets;

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
            Card::make('Total Stok Krupuk', $stokPrb . ' Bal'),
            Card::make('Total Stok Krupuk', $stokPsn . ' Bal'),
            Card::make('Total Stok Krupuk', $stokstb . ' Bal'),
            Card::make('Total Stok Krupuk', $stokSlo . ' Bal'),
            Card::make('Total Stok Krupuk', $stokJbr. ' Bal'),
            Card::make('Total Stok Krupuk', $stokstb . ' Bal'),
        ];
    }
}
