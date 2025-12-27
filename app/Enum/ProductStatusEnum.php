<?php

namespace App\Enum;

enum ProductStatusEnum: string
{
    case InStock = 'InStock';
    case OutOfStock = 'out_of_stock';
    case LowStock = 'low_stock';
}
