<?php

namespace App\Filament\Resources\StokPsnResource\Pages;

use App\Filament\Resources\StokPsnResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStokPsn extends EditRecord
{
    protected static string $resource = StokPsnResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
