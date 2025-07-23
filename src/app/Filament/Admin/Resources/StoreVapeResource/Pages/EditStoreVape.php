<?php

namespace App\Filament\Admin\Resources\StoreVapeResource\Pages;

use App\Filament\Admin\Resources\StoreVapeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStoreVape extends EditRecord
{
    protected static string $resource = StoreVapeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
