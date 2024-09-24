<?php

namespace App\Filament\Clusters\Home\Resources\AchievementResource\Pages;

use App\Filament\Clusters\Home\Resources\AchievementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAchievements extends ListRecords
{
    protected static string $resource = AchievementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
