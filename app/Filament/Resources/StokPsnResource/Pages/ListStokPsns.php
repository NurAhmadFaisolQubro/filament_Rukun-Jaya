<?php

namespace App\Filament\Resources\StokPsnResource\Pages;

use App\Filament\Resources\StokPsnResource\Widgets\StokStatsOverview;
use App\Filament\Resources\StokPsnResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStokPsns extends ListRecords
{
    protected static string $resource = StokPsnResource::class;

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
