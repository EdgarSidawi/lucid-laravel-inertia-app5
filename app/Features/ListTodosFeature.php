<?php

namespace App\Features;

use App\Domains\Todo\Jobs\GetTodosJob;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Lucid\Units\Feature;

class ListTodosFeature extends Feature
{
    public function handle()
    {
        $todos = $this->run(GetTodosJob::class);

        return Inertia('Home', [
            'todos' => $todos
        ]);
    }
}
