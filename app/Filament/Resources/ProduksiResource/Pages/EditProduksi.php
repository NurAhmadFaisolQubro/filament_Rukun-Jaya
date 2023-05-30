<?php

namespace App\Filament\Resources\ProduksiResource\Pages;

use App\Filament\Resources\ProduksiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProduksi extends EditRecord
{
    protected static string $resource = ProduksiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
