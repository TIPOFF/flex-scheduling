<?php

namespace Tipoff\FlexScheduling\Commands;

use Illuminate\Console\Command;

class FlexDayCommand extends Command
{
    public $signature = 'flexdays';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
