<?php

namespace App\Filament\Admin\Resources\FilesResource\Pages;

use App\Filament\Admin\Resources\FilesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFiles extends EditRecord
{
    protected static string $resource = FilesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if ($data['path']) {
            $disk = \Storage::disk('public');

            if ($disk->exists($data['path'])) {
                $fullPath = $disk->path($data['path']);
                $data['type'] = '.' . pathinfo($fullPath, PATHINFO_EXTENSION);
                $data['size'] = $disk->size($data['path']);
            }
        }

        return $data;
    }

}
