<?php

declare(strict_types=1);

namespace Osm\Data\Data;

use Osm\Core\App;
use Osm\Core\Exceptions\NotImplemented;
use Osm\Core\Object_;
use Illuminate\Database\Query\Builder as TableQuery;
use Osm\Data\Data\Filters\Condition;
use Osm\Data\Data\Hints\Property;

/**
 * @property Data $data
 */
class Type extends Object_
{
    public function select(\stdClass|Property $property, TableQuery $query,
        ?string $expr, string $alias, array $joins): void
    {
        throw new NotImplemented($this);
    }

    public function filter(\stdClass|Property $property, TableQuery $query,
        ?string $expr, Condition $condition, string $alias, array $joins): void
    {
        throw new NotImplemented($this);
    }

    protected function get_data(): Data {
        global $osm_app; /* @var App $osm_app */

        return $osm_app->data;
    }
}