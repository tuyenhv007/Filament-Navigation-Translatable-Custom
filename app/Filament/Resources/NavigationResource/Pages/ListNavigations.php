<?php

namespace App\Filament\Resources\NavigationResource\Pages;

use App\Filament\Resources\NavigationResource;
use App\Filament\Resources\NavigationResource\Pages\Concerns\HandlesNavigationBuilder;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNavigations extends ListRecords
{
    use HandlesNavigationBuilder;

    protected static string $resource = NavigationResource::class;

    public static function getResource(): string
    {
        return config('filament-navigation.navigation_resource') ?? NavigationResource::class;

    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
