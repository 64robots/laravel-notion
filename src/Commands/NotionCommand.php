<?php

namespace R64\Notion\Commands;

use Illuminate\Console\Command;

class NotionCommand extends Command
{
    public $signature = 'laravel-notion';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
