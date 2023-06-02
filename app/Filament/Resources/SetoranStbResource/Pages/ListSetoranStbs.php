<?php

namespace App\Filament\Resources\SetoranStbResource\Pages;

use App\Filament\Resources\SetoranStbResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSetoranStbs extends ListRecords
{
    protected static string $resource = SetoranStbResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
