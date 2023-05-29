<?php

namespace App\Filament\Resources\AdvertisesResource\Pages;

use App\Filament\Resources\AdvertisesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdvertises extends ListRecords
{
    protected static string $resource = AdvertisesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
