<?php

namespace App\Filament\Resources\LodgingResource\Pages;

use App\Filament\Resources\LodgingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLodgings extends ListRecords
{
    protected static string $resource = LodgingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
