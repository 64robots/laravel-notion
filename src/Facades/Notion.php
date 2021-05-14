<?php

namespace R64\LaravelNotion\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \R64\PhpNotion\Notion
 */
class Notion extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'php-notion';
    }
}
