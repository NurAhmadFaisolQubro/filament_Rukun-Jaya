<?php

namespace App\Filament\Resources\SetoranJbrResource\Pages;

use App\Filament\Resources\SetoranJbrResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSetoranJbr extends EditRecord
{
    protected static string $resource = SetoranJbrResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
