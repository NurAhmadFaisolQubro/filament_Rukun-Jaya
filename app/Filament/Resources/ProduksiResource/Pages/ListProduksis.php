<?php

namespace App\Filament\Resources\ProduksiResource\Pages;

use App\Filament\Resources\ProduksiResource;
use App\Filament\Resources\ProduksiResource\Widgets\StokStatsOverview;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProduksis extends ListRecords
{
    protected static string $resource = ProduksiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
{
    return [
        StokStatsOverview::class,
    ];
}
}
