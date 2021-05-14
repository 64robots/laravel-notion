<?php

namespace R64\Notion;

use Illuminate\Support\Facades\Facade;

/**
 * @see \R64\Notion\Notion
 */
class NotionFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-notion';
    }
}
