<?php

namespace App\Filament\Resources\SetoranPsnResource\Pages;

use App\Filament\Resources\SetoranPsnResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSetoranPsns extends ListRecords
{
    protected static string $resource = SetoranPsnResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
