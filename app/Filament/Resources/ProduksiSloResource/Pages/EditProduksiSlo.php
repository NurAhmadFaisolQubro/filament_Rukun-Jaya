<?php

namespace App\Filament\Resources\ProduksiSloResource\Pages;

use App\Filament\Resources\ProduksiSloResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProduksiSlo extends EditRecord
{
    protected static string $resource = ProduksiSloResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
