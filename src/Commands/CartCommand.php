<?php

namespace Abdelhamiderrahmouni\Cart\Commands;

use Illuminate\Console\Command;

class CartCommand extends Command
{
    public $signature = 'my-laravel-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
