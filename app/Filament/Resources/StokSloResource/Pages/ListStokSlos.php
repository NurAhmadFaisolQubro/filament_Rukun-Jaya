<?php

namespace App\Filament\Resources\StokSloResource\Pages;

use App\Filament\Resources\StokSloResource\Widgets\StokStatsOverview;
use App\Filament\Resources\StokSloResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStokSlos extends ListRecords
{
    protected static string $resource = StokSloResource::class;

    // protected function getActions(): array
    // {
    //     return [
    //         Actions\CreateAction::make(),
    //     ];
    // }
    protected function getHeaderWidgets(): array
{
    return [
        StokStatsOverview::class,
    ];
}
}
