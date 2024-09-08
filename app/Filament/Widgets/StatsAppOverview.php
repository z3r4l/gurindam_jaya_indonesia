<?php

namespace App\Filament\Widgets;

use App\Models\InnerCity;
use App\Models\Lodging;
use App\Models\OuterCity;
use App\Models\Packet;
use App\Models\RestoBar;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsAppOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::count())
            ->color('success')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Inner City', InnerCity::count())
            ->color('success')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Outer City', OuterCity::count())
            ->color('success')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Packet', Packet::count())
            ->color('success')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Lodging', Lodging::count())
            ->color('success')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Restaurant & Bar', RestoBar::count())
            ->color('success')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
            // Stat::make('Bounce rate', '21%')
            //     ->descriptionIcon('heroicon-m-arrow-trending-down')
            //     ->color('danger'),
            // Stat::make('Average time on page', '3:12')
            //     ->descriptionIcon('heroicon-m-arrow-trending-up')
            //     ->color('success'),
            
        ];
    }
}
