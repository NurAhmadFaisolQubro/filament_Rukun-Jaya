<?php

namespace App\Filament\Resources\ProduksiStbResource\Pages;

use App\Filament\Resources\ProduksiStbResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduksiStb extends CreateRecord
{
    protected static string $resource = ProduksiStbResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
