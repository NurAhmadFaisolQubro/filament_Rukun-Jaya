<?php

namespace App\Filament\Resources\SetoranJbrResource\Pages;

use App\Filament\Resources\SetoranJbrResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSetoranJbrs extends ListRecords
{
    protected static string $resource = SetoranJbrResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
