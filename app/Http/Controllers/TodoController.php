<?php

namespace App\Http\Controllers;

use App\Features\AddTodoFeature;
use App\Features\ListTodosFeature;
use Lucid\Units\Controller;

class TodoController extends Controller
{
    public function index()
    {
        return $this->serve(ListTodosFeature::class);
    }

    public function add()
    {
        return $this->serve(AddTodoFeature::class);
    }
}
