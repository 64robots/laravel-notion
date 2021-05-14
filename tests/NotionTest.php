<?php

namespace R64\Notion\Tests;

use Exception;
use Illuminate\Support\Facades\Config;
use R64\Notion\Facades\Notion;
use R64\PhpNotion\Resources\Databases;

class NotionTest extends TestCase
{
    /** @test */
    public function it_knows_about_notion()
    {
        $this->assertNull(config('notion.access_token'));
        Config::set('notion.access_token', 'test');
        $database = Notion::databases();
        $this->assertInstanceOf(Databases::class, $database);
        Config::set('notion.access_token', null);
    }

    /** @test */
    public function it_throws_an_exception_if_access_token_is_not_provided()
    {
        $this->assertNull(config('notion.access_token'));
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Notion access token not provided.');
        Notion::databases();
        Config::set('notion.access_token', null);
    }
}
