<?php

namespace App\Filament\Admin\Resources\FilesResource\Pages;

use App\Filament\Admin\Resources\FilesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFiles extends CreateRecord
{
    protected static string $resource = FilesResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if ($data['path']) {
            $disk = \Storage::disk('public');

            if ($disk->exists($data['path'])) {
                $fullPath = $disk->path($data['path']);
                $data['type'] = '.' . pathinfo($fullPath, PATHINFO_EXTENSION); // 👉 Dapatkan ekstensi (tanpa titik)
                $data['size'] = $disk->size($data['path']);
            }
        }

        return $data;
    }


}
