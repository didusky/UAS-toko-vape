<?php

namespace App\Filament\Admin\Resources\LiquidResource\Pages;

use App\Filament\Admin\Resources\LiquidResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLiquid extends EditRecord
{
    protected static string $resource = LiquidResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
