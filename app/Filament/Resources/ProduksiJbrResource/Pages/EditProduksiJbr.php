<?php

namespace App\Filament\Resources\ProduksiJbrResource\Pages;

use App\Filament\Resources\ProduksiJbrResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProduksiJbr extends EditRecord
{
    protected static string $resource = ProduksiJbrResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
