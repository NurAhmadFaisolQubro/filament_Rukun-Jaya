<?php

namespace App\Filament\Resources\StokJbrResource\Pages;

use App\Filament\Resources\StokJbrResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStokJbr extends EditRecord
{
    protected static string $resource = StokJbrResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
