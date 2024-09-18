<?php

namespace App\Filament\Clusters\Home\Resources\BannerResource\Pages;

use App\Filament\Clusters\Home\Resources\BannerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBanner extends CreateRecord
{
    protected static string $resource = BannerResource::class;
}
