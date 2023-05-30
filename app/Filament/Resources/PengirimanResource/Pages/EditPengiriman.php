<?php

namespace App\Filament\Resources\PengirimanResource\Pages;

use App\Filament\Resources\PengirimanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPengiriman extends EditRecord
{
    protected static string $resource = PengirimanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
