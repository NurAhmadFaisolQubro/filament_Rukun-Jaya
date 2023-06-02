<?php

namespace App\Filament\Resources\SetoranMlgResource\Pages;

use App\Filament\Resources\SetoranMlgResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSetoranMlg extends CreateRecord
{
    protected static string $resource = SetoranMlgResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
