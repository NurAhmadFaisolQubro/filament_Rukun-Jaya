<?php

namespace App\Filament\Resources\ProduksiSloResource\Pages;

use App\Filament\Resources\ProduksiSloResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduksiSlo extends CreateRecord
{
    protected static string $resource = ProduksiSloResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
