<?php

namespace App\Filament\Resources\SetoranSloResource\Pages;

use App\Filament\Resources\SetoranSloResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSetoranSlos extends ListRecords
{
    protected static string $resource = SetoranSloResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
