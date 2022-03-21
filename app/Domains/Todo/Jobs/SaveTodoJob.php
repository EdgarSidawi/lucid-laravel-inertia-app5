<?php

namespace App\Domains\Todo\Jobs;

use App\Data\Models\Todo;
use Lucid\Units\Job;

class SaveTodoJob extends Job
{

    private string $name;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $attributes = [
            'name' => $this->name
        ];

        return tap(new Todo($attributes))->save();
    }
}
