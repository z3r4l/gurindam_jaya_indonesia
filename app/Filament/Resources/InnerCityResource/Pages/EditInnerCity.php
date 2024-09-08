<?php

namespace App\Filament\Resources\InnerCityResource\Pages;

use App\Filament\Resources\InnerCityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInnerCity extends EditRecord
{
    protected static string $resource = InnerCityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
