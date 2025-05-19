<?php

namespace App\Filament\Admin\Resources\RiwayatMedisResource\Pages;

use App\Filament\Admin\Resources\RiwayatMedisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRiwayatMedis extends EditRecord
{
    protected static string $resource = RiwayatMedisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
