<?php

namespace App\Filament\Admin\Resources\PerangkatVapeResource\Pages;

use App\Filament\Admin\Resources\PerangkatVapeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPerangkatVapes extends ListRecords
{
    protected static string $resource = PerangkatVapeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
