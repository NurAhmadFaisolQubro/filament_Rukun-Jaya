<?php

namespace App\Filament\Resources\StokJbrResource\Pages;

use App\Filament\Resources\StokJbrResource;
use Filament\Pages\Actions;
use App\Filament\Resources\StokJbrResource\Widgets\StokStatsOverview;
use Filament\Resources\Pages\ListRecords;

class ListStokJbrs extends ListRecords
{
    protected static string $resource = StokJbrResource::class;

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

