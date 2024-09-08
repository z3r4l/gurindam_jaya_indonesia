<?php

namespace App\Filament\Resources\RestoBarResource\Pages;

use App\Filament\Resources\RestoBarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRestoBars extends ListRecords
{
    protected static string $resource = RestoBarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
