<?php

namespace App\Filament\Resources\ProduksiStbResource\Pages;

use App\Filament\Resources\ProduksiStbResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProduksiStb extends EditRecord
{
    protected static string $resource = ProduksiStbResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
