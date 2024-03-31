<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class StartApp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start Application with one command';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $this->call('migrate');
        $this->call('db:seed --class=AdminSeeder');
        $this->call('db:seed --class=UserSeeder');

        $this->call('serve');
        $this->info('Application started successfully.');
    
    }
}
