<?php

namespace App\Filament\Resources\CardConfigResource\Pages;

use App\Filament\Resources\CardConfigResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCardConfig extends EditRecord
{
    protected static string $resource = CardConfigResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
