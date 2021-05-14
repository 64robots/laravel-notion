<?php

namespace R64\LaravelNotion;

use Exception;
use R64\PhpNotion\Notion;
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
        $this->app->alias(Notion::class, 'php-notion');

        $this->app->singleton(Notion::class, function () {
            $config = config('notion');

            $this->guardAgainstInvalidConfiguration($config);

            return new Notion($config['access_token']);
        });
    }

    protected function guardAgainstInvalidConfiguration(array $config = null)
    {
        if (empty($config['access_token'])) {
            throw new Exception('Notion access token not provided.');
        }
    }
}
