<?php

namespace App\Filament\Resources\SetoranSloResource\Pages;

use App\Filament\Resources\SetoranSloResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSetoranSlo extends CreateRecord
{
    protected static string $resource = SetoranSloResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
