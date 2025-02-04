<?php

namespace App\Filament\Resources\CompanyAdminResource\Pages;

use App\Filament\Resources\CompanyAdminResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompanyAdmins extends ListRecords
{
    protected static string $resource = CompanyAdminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
