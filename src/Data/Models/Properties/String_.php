<?php

declare(strict_types=1);

namespace Osm\Data\Data\Models\Properties;

use Osm\Core\Attributes\Name;

#[Name('property/string')]
class String_ extends Scalar
{
    public string $type = 'string';
}