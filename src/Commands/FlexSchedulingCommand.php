<?php

namespace Tipoff\FlexScheduling\Commands;

use Illuminate\Console\Command;

class FlexSchedulingCommand extends Command
{
    public $signature = 'flex-scheduling';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
