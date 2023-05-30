<?php

namespace App\Filament\Resources\CabangResource\Pages;

use App\Filament\Resources\CabangResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCabangs extends ListRecords
{
    protected static string $resource = CabangResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
