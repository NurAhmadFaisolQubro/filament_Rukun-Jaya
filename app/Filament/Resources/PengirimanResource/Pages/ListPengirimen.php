<?php

namespace App\Filament\Resources\PengirimanResource\Pages;

use App\Filament\Resources\PengirimanResource;
use App\Filament\Resources\PengirimanResource\Widgets\StokStatsOverview;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPengirimen extends ListRecords
{
    protected static string $resource = PengirimanResource::class;

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
