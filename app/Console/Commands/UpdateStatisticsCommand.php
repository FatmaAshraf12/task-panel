<?php

namespace App\Console\Commands;

use App\Jobs\updateStatisticsTable;
use Illuminate\Console\Command;

class UpdateStatisticsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:statistics';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Statistics Table';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        updateStatisticsTable::dispatch();

        $this->info('update statistics job dispatched successfully.');
    }
}
