<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'todo_item',
        'created_at',
        'updated_at',
        'user_id',
    ];

    protected $casts = [
        'close_todo' => 'boolean',
        'created_at' => 'date:Y/m/d',
        'updated_at' => 'date:Y/m/d',
    ];
}
