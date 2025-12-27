<?php

namespace App\Filament\Resources\products\Pages;

use App\Filament\Resources\products\productResource;
use Filament\Resources\Pages\CreateRecord;

class Createproduct extends CreateRecord
{
    protected static string $resource = productResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
