<?php

namespace App\Filament\Resources\ParkingLayoutResource\Pages;

use App\Filament\Resources\ParkingLayoutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditParkingLayout extends EditRecord
{
    protected static string $resource = ParkingLayoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
