<?php

namespace App\Repositories\Todo;

use App\Models\Todo;
use Illuminate\Support\Collection;

interface TodoRepositoryContract
{

    /**
     * @param array<string, mixed> $attributes
     * @return Todo
     */
    public function createTodo(array $attributes): Todo;
}
