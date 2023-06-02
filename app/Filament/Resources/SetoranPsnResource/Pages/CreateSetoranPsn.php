<?php

namespace App\Filament\Resources\SetoranPsnResource\Pages;

use App\Filament\Resources\SetoranPsnResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSetoranPsn extends CreateRecord
{
    protected static string $resource = SetoranPsnResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
