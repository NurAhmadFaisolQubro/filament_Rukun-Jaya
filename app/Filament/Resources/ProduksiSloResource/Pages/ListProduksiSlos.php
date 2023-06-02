<?php

namespace App\Filament\Resources\ProduksiSloResource\Pages;

use App\Filament\Resources\ProduksiSloResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProduksiSlos extends ListRecords
{
    protected static string $resource = ProduksiSloResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
