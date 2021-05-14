<?php

namespace R64\Notion\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use R64\Notion\NotionServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            NotionServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        // config()->set('database.default', 'testing');

        /*
        include_once __DIR__.'/../database/migrations/create_laravel-notion_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
