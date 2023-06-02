<?php

namespace App\Filament\Resources\ProduksiJbrResource\Pages;

use App\Filament\Resources\ProduksiJbrResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProduksiJbrs extends ListRecords
{
    protected static string $resource = ProduksiJbrResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
