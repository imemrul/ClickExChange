<?php

namespace App\Filament\Resources\AdvertisesResource\Pages;

use App\Filament\Resources\AdvertisesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdvertises extends EditRecord
{
    protected static string $resource = AdvertisesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
