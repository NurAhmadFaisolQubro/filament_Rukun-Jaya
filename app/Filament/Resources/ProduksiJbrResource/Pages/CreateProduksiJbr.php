<?php

namespace App\Filament\Resources\ProduksiJbrResource\Pages;

use App\Filament\Resources\ProduksiJbrResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduksiJbr extends CreateRecord
{
    protected static string $resource = ProduksiJbrResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
