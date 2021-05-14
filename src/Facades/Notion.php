<?php

namespace R64\Notion\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \R64\Notion\Notion
 */
class Notion extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'notion';
    }
}
