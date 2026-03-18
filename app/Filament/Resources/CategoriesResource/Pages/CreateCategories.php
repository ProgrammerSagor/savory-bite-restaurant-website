<?php

namespace App\Filament\Resources\CategoriesResource\Pages;

use App\Filament\Resources\CategoriesResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateCategories extends CreateRecord
{
    protected static string $resource = CategoriesResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Category Created Successfully!')
            ->body('Your new category has been added.');
    }


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
