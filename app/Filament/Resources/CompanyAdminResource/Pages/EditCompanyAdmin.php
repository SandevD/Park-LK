<?php

namespace App\Filament\Resources\CompanyAdminResource\Pages;

use App\Filament\Resources\CompanyAdminResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyAdmin extends EditRecord
{
    protected static string $resource = CompanyAdminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
