<?php

namespace App\Domains\Todo\Jobs;

use App\Data\Models\Todo;
use Lucid\Units\Job;

class GetTodosJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        return Todo::all();
    }
}
