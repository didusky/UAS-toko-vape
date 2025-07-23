<?php

namespace App\Filament\Admin\Resources\PerangkatVapeResource\Pages;

use App\Filament\Admin\Resources\PerangkatVapeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPerangkatVape extends EditRecord
{
    protected static string $resource = PerangkatVapeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
