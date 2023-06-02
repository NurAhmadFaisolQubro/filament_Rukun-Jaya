<?php

namespace App\Filament\Resources\StokStbResource\Pages;

use App\Filament\Resources\StokStbResource\Widgets\StokStatsOverview;
use App\Filament\Resources\StokStbResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStokStbs extends ListRecords
{
    protected static string $resource = StokStbResource::class;

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
