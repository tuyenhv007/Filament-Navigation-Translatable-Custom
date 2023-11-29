<?php

namespace App\Filament\Resources\NavigationResource\Pages;

use App\Filament\Resources\NavigationResource;
use App\Filament\Resources\NavigationResource\Pages\Concerns\HandlesNavigationBuilder;
use Filament\Resources\Pages\CreateRecord;

class CreateNavigation extends CreateRecord
{
    use HandlesNavigationBuilder;

    protected static string $resource = NavigationResource::class;

    public static function getResource(): string
    {
        return config('filament-navigation.navigation_resource') ?? NavigationResource::class;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Navigation Created';
    }
}
