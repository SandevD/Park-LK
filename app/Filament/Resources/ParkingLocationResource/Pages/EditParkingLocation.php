<?php

namespace App\Filament\Resources\ParkingLocationResource\Pages;

use App\Filament\Resources\ParkingLocationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditParkingLocation extends EditRecord
{
    protected static string $resource = ParkingLocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
