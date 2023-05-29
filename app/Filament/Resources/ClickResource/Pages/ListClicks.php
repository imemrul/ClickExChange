<?php

namespace App\Filament\Resources\ClickResource\Pages;

use App\Filament\Resources\ClickResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClicks extends ListRecords
{
    protected static string $resource = ClickResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
