<?php

declare(strict_types=1);

namespace Osm\Data\Samples\Products\Models;

use Osm\Core\Attributes\Name;
use Osm\Data\Data\Attributes\Endpoint;
use Osm\Data\Data\Attributes\Migration;
use Osm\Data\Data\Model;

/**
 * @property string $sku #[Migration('products')]
 */
#[Name('product'), Migration('products'), Endpoint('/products')]
class Product extends Model
{
}