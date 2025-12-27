<?php

namespace App\Filament\Resources\products\Pages;

use App\Filament\Resources\products\productResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class Listproducts extends ListRecords
{
    protected static string $resource = productResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
