<?php

/** @noinspection PhpUnused */
declare(strict_types=1);

namespace Osm\Data\Samples\Base;

use Osm\Core\BaseModule;
use Osm\Data\Samples\App;

class Module extends BaseModule
{
    public static ?string $app_class_name = App::class;

    public static array $requires = [
        \Osm\Data\All\Module::class,
    ];
}