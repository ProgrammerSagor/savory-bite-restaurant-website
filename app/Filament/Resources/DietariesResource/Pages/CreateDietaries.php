<?php

namespace App\Filament\Resources\DietariesResource\Pages;

use App\Filament\Resources\DietariesResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateDietaries extends CreateRecord
{
    protected static string $resource = DietariesResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Dietaries Created Successfully!')
            ->body('Your new Dietaries has been added.');
    }


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
