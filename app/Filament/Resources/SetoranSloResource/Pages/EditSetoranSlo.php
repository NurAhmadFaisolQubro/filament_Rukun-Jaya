<?php

namespace App\Filament\Resources\SetoranSloResource\Pages;

use App\Filament\Resources\SetoranSloResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSetoranSlo extends EditRecord
{
    protected static string $resource = SetoranSloResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
