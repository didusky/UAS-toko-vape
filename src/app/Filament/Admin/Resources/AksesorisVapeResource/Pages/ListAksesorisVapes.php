<?php

namespace App\Filament\Admin\Resources\AksesorisVapeResource\Pages;

use App\Filament\Admin\Resources\AksesorisVapeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAksesorisVapes extends ListRecords
{
    protected static string $resource = AksesorisVapeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
