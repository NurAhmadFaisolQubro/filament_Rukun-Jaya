<?php

namespace App\Filament\Resources\SetoranJbrResource\Pages;

use App\Filament\Resources\SetoranJbrResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSetoranJbr extends CreateRecord
{
    protected static string $resource = SetoranJbrResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
