<?php

namespace App\Filament\Admin\Resources\FilesResource\Pages;

use App\Filament\Admin\Resources\FilesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFiles extends ListRecords
{
    protected static string $resource = FilesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
