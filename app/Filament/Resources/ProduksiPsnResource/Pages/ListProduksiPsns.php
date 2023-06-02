<?php

namespace App\Filament\Resources\ProduksiPsnResource\Pages;

use App\Filament\Resources\ProduksiPsnResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProduksiPsns extends ListRecords
{
    protected static string $resource = ProduksiPsnResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
