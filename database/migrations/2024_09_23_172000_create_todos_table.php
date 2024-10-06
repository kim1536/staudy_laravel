<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('position_id', false, true)->comment('順番');
            $table->boolean('close_todo')->default(false)->comment('完了状態');
            $table->string('todo_item', 255)->comment('todoの項目');
            $table->foreignId('user_id')->references('id')->on('users')->comment('ユーザーID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
