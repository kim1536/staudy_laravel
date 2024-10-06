<?php

declare(strict_types=1);

namespace App\Repositories\Todo;

use App\Models\Todo;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EloquentTodoRepository implements TodoRepositoryContract
{
    public function createTodo(array $attributes): Todo
    {
        /** @var v $Todo */
        $todo = Todo::create([
            'todo_item' => $attributes['todo_item'],
            'user_id' => Auth::id(),
        ]);

        return $todo;
    }

}
