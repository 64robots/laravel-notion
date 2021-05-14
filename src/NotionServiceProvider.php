<?php

namespace R64\Notion;

use Exception;
use R64\Notion\Facades\Notion;
use R64\PhpNotion\Notion as PhpNotion;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasConfigFile();
    }

    public function packageRegistered()
    {
        $this->app->alias(Notion::class, 'notion');

        $this->app->bind(Notion::class, function () {
            $config = config('notion');

            $this->guardAgainstInvalidConfiguration($config);

            return new PhpNotion($config['access_token']);
        });
    }

    protected function guardAgainstInvalidConfiguration(array $config = null)
    {
        if (empty($config['access_token'])) {
            throw new Exception('Notion access token not provided.');
        }
    }
}
