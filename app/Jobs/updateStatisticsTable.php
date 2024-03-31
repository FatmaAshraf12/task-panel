<?php

namespace App\Jobs;

use App\Models\Statistics;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class updateStatisticsTable implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    

    /**
     * Execute the job.
     */
    public function handle(): void
    {   $user = User::role('user')
        ->whereHas('tasks')
        ->withCount('tasks')
        ->get();
        foreach($user as $user){
            Statistics::updateOrCreate(['user_id'=>$user->id],['tasks_count'=>$user->tasks_count]);
        }
    }
}
