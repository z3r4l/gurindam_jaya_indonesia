<?php

namespace App\Filament\Resources\OuterCityResource\Pages;

use App\Filament\Resources\OuterCityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOuterCities extends ListRecords
{
    protected static string $resource = OuterCityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
