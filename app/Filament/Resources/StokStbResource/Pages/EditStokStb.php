<?php

namespace App\Filament\Resources\StokStbResource\Pages;

use App\Filament\Resources\StokStbResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStokStb extends EditRecord
{
    protected static string $resource = StokStbResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
