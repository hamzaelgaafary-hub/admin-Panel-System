<?php

namespace App\Filament\Resources\products\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class productForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->unique()
                    ->maxLength(255),
                TextInput::make('price')
                    ->required()
                    ->numeric(),
                TextInput::make('description')
                    ->maxLength(255)
                    ->nullable(),
            ]);
    }
}
