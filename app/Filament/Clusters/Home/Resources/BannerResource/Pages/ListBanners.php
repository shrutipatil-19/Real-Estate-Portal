<?php

namespace App\Filament\Clusters\Home\Resources\BannerResource\Pages;

use App\Filament\Clusters\Home\Resources\BannerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBanners extends ListRecords
{
    protected static string $resource = BannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
