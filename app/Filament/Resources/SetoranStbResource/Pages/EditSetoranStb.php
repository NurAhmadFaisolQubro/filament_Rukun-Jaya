<?php

namespace App\Filament\Resources\SetoranStbResource\Pages;

use App\Filament\Resources\SetoranStbResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSetoranStb extends EditRecord
{
    protected static string $resource = SetoranStbResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
