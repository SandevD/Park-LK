<?php

namespace App\Filament\Resources\ParkingLayoutResource\Pages;

use App\Filament\Resources\ParkingLayoutResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListParkingLayouts extends ListRecords
{
    protected static string $resource = ParkingLayoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
