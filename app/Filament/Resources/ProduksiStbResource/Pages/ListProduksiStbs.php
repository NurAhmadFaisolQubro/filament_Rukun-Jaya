<?php

namespace App\Filament\Resources\ProduksiStbResource\Pages;

use App\Filament\Resources\ProduksiStbResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProduksiStbs extends ListRecords
{
    protected static string $resource = ProduksiStbResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
