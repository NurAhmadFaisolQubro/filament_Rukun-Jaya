<?php

namespace App\Filament\Resources\ProduksiMlgResource\Pages;

use App\Filament\Resources\ProduksiMlgResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProduksiMlgs extends ListRecords
{
    protected static string $resource = ProduksiMlgResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
