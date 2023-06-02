<?php

namespace App\Filament\Resources\StokMlgResource\Pages;

use App\Filament\Resources\StokMlgResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStokMlg extends EditRecord
{
    protected static string $resource = StokMlgResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
