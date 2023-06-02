<?php

namespace App\Filament\Resources\ProduksiPsnResource\Pages;

use App\Filament\Resources\ProduksiPsnResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProduksiPsn extends EditRecord
{
    protected static string $resource = ProduksiPsnResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
