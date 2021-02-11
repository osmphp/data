<?php

declare(strict_types=1);

namespace Osm\Data\Tests;

use Osm\Data\Files\Module;
use Osm\Data\Files\Rules\Record;
use Osm\Data\Samples\App;
use Osm\Runtime\Apps;
use PHPUnit\Framework\TestCase;

class test_01_files extends TestCase
{
    public function test_parsing() {
        Apps::run(Apps::create(App::class), function(App $app) {
            // GIVEN a set of data file rules
            $text = <<<EOT
{name*}.png|jpg|gif record {
    # indented comment 
    "sheet_name": "public_files" 
}

{sheet_name}.csv recordset
{sheet_name}/{recordset_name}.csv recordset
{sheet_name}/renamed_{recordset_name}.csv renamedset
{sheet_name}/deleted_{recordset_name}.csv deletedset
{sheet_name}/{name}.json record
{sheet_name}/{name}.renamed.json renamed
{sheet_name}/{name}.deleted.json deleted
env.json record { "sheet_name": "env" }

# comment
readme.md ignore

EOT;

            // WHEN you parse the rule set
            /* @var Module $module */
            $module = $app->modules[Module::class];
            $rules = $module->parse($text);

            // THEN rule objects are created
            $this->assertCount(10, $rules);
            $this->assertInstanceOf(Record::class, $rules[0]);
        });
    }
}