<?php

namespace App\Filament\Resources\ProduksiMlgResource\Pages;

use App\Filament\Resources\ProduksiMlgResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduksiMlg extends CreateRecord
{
    protected static string $resource = ProduksiMlgResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
