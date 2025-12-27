<?php

namespace App\Filament\Resources\products;

use App\Filament\Resources\products\Pages\Createproduct;
use App\Filament\Resources\products\Pages\Editproduct;
use App\Filament\Resources\products\Pages\Listproducts;
use App\Filament\Resources\products\Schemas\productForm;
use App\Filament\Resources\products\Tables\productsTable;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use App\Models\product;

class productResource extends Resource
{
    protected static ?string $model = product::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Product';

    public static function form(Schema $schema): Schema
    {
        return productForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return productsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Listproducts::route('/'),
            'create' => Createproduct::route('/create'),
            'edit' => Editproduct::route('/{record}/edit'),
        ];
    }
}
