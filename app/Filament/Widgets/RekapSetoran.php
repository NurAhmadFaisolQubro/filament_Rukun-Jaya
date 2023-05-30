<?php

namespace App\Filament\Widgets;

use Closure;
use App\Models\Setoran;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class RekapSetoran extends BaseWidget
{
    protected static ?int $sort = 5;
    protected int | string | array $columnSpan = 'full';
    protected function getTableQuery(): Builder
    {
        return Setoran::query()->latest();
    }

    protected function getTableColumns(): array
    {
        return [
                TextColumn::make('nama'),
                TextColumn::make('cabang'),
                TextColumn::make('nominal')->money($symbol = 'idr', $decimalSeparator = '.', $thousandsSeparator = ',', $decimals = 2),
                BadgeColumn::make('acc')
                ->enum([
                    '1' => 'Diterima',
                    '0' => 'Dicek',
                ])
                ->colors([
                    'primary',
                    'success' => 'Diterima',
                    'danger' => 'Dicek',
                ]),
                ImageColumn::make('gambar')->circular(),
                TextColumn::make('created_at')->dateTime()
        ];
       
    }

}
