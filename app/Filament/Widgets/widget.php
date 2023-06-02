<?php

namespace App\Filament\Widgets;

use DB;
use App\Models\Setoran;
use App\Models\Cabang;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class widget extends BaseWidget
{
    protected static ?int $sort = 1;
    protected function getCards(): array
    {
        $data = Setoran::where('acc', '1')->sum('nominal');
        $dataCbg = Cabang::select('cabang', 'cabang')->count();
        $pabrikTerbanyak = Setoran::where('acc', '1')->orderBy('nominal', 'desc')->first();

        return [
            Card::make('Penjualan Terbanyak',  $pabrikTerbanyak->cabang )
            ->description('Rp. '. number_format($pabrikTerbanyak->nominal, 0, ',', '.'))
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Card::make('Total Pemasukan', 'Rp. ' . number_format($data, 0, ',', '.'))
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('warning'),
            Card::make('Total Pabrik', $dataCbg . ' Pabrik')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('danger'),
        ];
    }
}


