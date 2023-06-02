<?php

namespace App\Filament\Resources\StokMlgResource\Pages;

use App\Filament\Resources\StokMlgResource\Widgets\StokStatsOverview;
use App\Filament\Resources\StokMlgResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStokMlgs extends ListRecords
{
    protected static string $resource = StokMlgResource::class;

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
