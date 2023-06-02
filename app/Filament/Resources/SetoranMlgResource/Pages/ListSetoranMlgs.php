<?php

namespace App\Filament\Resources\SetoranMlgResource\Pages;

use App\Filament\Resources\SetoranMlgResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSetoranMlgs extends ListRecords
{
    protected static string $resource = SetoranMlgResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
