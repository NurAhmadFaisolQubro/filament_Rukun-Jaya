<?php

namespace App\Filament\Resources\ProduksiPsnResource\Pages;

use App\Filament\Resources\ProduksiPsnResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduksiPsn extends CreateRecord
{
    protected static string $resource = ProduksiPsnResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
