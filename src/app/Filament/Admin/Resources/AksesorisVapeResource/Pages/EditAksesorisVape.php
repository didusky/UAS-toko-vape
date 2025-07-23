<?php

namespace App\Filament\Admin\Resources\AksesorisVapeResource\Pages;

use App\Filament\Admin\Resources\AksesorisVapeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAksesorisVape extends EditRecord
{
    protected static string $resource = AksesorisVapeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
