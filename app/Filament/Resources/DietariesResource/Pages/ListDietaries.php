<?php

namespace App\Filament\Resources\DietariesResource\Pages;

use App\Filament\Resources\DietariesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDietaries extends ListRecords
{
    protected static string $resource = DietariesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
