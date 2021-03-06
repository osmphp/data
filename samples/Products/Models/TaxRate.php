<?php

declare(strict_types=1);

namespace Osm\Data\Samples\Products\Models;

use Osm\Core\Attributes\Name;
use Osm\Data\Data\Attributes\Endpoint;
use Osm\Data\Data\Attributes\Schema;
use Osm\Data\Data\Model;
use Osm\Data\Data\Models\Record;

/**
 * @property string $country_code #[Schema('M02_taxes')]
 */
#[Name('tax_rate'), Schema('M02_taxes'), Endpoint('/tax-rates')]
class TaxRate extends Record
{

}