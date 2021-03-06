# Package to work with Notion API from Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/64robots/laravel-notion.svg?style=flat-square)](https://packagist.org/packages/64robots/laravel-notion)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/64robots/laravel-notion/run-tests?label=tests)](https://github.com/64robots/laravel-notion/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/64robots/laravel-notion/Check%20&%20fix%20styling?label=code%20style)](https://github.com/64robots/laravel-notion/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/64robots/laravel-notion.svg?style=flat-square)](https://packagist.org/packages/64robots/laravel-notion)

This package helps you to use the notion API from Laravel.

## Installation

You can install the package via composer:

```bash
composer require 64robots/laravel-notion
```

Add to your environment file (usually `.env`) the key:

```dotenv
NOTION_ACCESS_TOKEN=YourAccessTokenToNotion
```

## Customization

You can publish the config file with:

```bash
php artisan vendor:publish --provider="R64\LaravelNotion\NotionServiceProvider" --tag="laravel-notion-config"
```

This is the contents of the published config file:

```php
return [
    'access_token' => env('NOTION_ACCESS_TOKEN'),
];
```

## Usage

```php
use R64\LaravelNotion\Facades\Notion;

$database = Notion::databases()->retrieve('a65b5216-46cb-479b-961e-67cc7b05a56d');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [64 Robots](https://github.com/64robots)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
