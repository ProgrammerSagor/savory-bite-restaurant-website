<?php

namespace App\Filament\Resources\FoodProductResource\Pages;

use App\Filament\Resources\FoodProductResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditFoodProduct extends EditRecord
{
    protected static string $resource = FoodProductResource::class;

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
            ->title('Food Product Updated Successfully')
            ->body('Your recent updates to the food product have been applied successfully.');
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
