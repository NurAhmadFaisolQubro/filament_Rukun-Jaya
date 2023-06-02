<?php

namespace App\Filament\Resources\StokSloResource\Pages;

use App\Filament\Resources\StokSloResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStokSlo extends EditRecord
{
    protected static string $resource = StokSloResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
