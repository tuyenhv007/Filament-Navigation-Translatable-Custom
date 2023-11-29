<?php

namespace App\Filament\Resources\NavigationResource\Pages;

use App\Filament\Resources\NavigationResource;
use App\Filament\Resources\NavigationResource\Pages\Concerns\HandlesNavigationBuilder;
use Filament\Resources\Pages\EditRecord;

class EditNavigation extends EditRecord
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

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Navigation Edited';
    }
}
