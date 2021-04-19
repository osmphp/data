<?php

declare(strict_types=1);

use Osm\Runtime\Apps;

require 'vendor/autoload.php';
umask(0);

Apps::$project_path = dirname(dirname(__DIR__));
Apps::compile(\Osm\Data\Samples\App::class);
