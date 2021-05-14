<?php

namespace R64\Notion;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use R64\Notion\Commands\NotionCommand;

class NotionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-notion')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-notion_table')
            ->hasCommand(NotionCommand::class);
    }
}
