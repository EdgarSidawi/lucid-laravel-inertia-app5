<?php

namespace App\Features;

use App\Domains\Http\Jobs\RedirectBackJob;
use App\Domains\Todo\Jobs\SaveTodoJob;
use App\Domains\Todo\Requests\AddTodo;
use Illuminate\Http\Request;
use Lucid\Units\Feature;

class AddTodoFeature extends Feature
{
    public function handle(AddTodo $request)
    {
        $this->run(SaveTodoJob::class, [
            'name' => $request->input('name')
        ]);

        return $this->run(RedirectBackJob::class);
    }
}
