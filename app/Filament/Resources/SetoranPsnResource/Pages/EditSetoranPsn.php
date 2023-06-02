<?php

namespace App\Filament\Resources\SetoranPsnResource\Pages;

use App\Filament\Resources\SetoranPsnResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSetoranPsn extends EditRecord
{
    protected static string $resource = SetoranPsnResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
