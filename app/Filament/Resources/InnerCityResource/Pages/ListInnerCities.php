<?php

namespace App\Filament\Resources\InnerCityResource\Pages;

use App\Filament\Resources\InnerCityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInnerCities extends ListRecords
{
    protected static string $resource = InnerCityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
