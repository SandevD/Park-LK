<?php

namespace App\Filament\Resources\ParkingLocationResource\Pages;

use App\Filament\Resources\ParkingLocationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListParkingLocations extends ListRecords
{
    protected static string $resource = ParkingLocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
