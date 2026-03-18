<?php

namespace App\Filament\Resources\DietariesResource\Pages;

use App\Filament\Resources\DietariesResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditDietaries extends EditRecord
{
    protected static string $resource = DietariesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }


    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Your Dietaries have been saved')
            ->body('The Dietaries information has been successfully updated.');
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
