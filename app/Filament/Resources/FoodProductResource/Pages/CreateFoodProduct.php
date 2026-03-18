<?php

namespace App\Filament\Resources\FoodProductResource\Pages;

use App\Filament\Resources\FoodProductResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateFoodProduct extends CreateRecord
{
    protected static string $resource = FoodProductResource::class;


    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Food Product Created Successfully!')
            ->body('Your new Food Product has been added to the system.')
            ->success() 
            ->send();
    }


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
