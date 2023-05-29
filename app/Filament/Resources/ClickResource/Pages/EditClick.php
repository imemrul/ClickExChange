<?php

namespace App\Filament\Resources\ClickResource\Pages;

use App\Filament\Resources\ClickResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClick extends EditRecord
{
    protected static string $resource = ClickResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
