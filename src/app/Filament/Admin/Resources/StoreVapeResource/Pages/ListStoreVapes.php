<?php

namespace App\Filament\Admin\Resources\StoreVapeResource\Pages;

use App\Filament\Admin\Resources\StoreVapeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStoreVapes extends ListRecords
{
    protected static string $resource = StoreVapeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
