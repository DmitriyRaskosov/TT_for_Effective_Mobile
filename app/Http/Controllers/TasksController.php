<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TasksController extends BaseController
{
    protected $modelClass = Task::class;

    protected static function validationRules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string|in:pending,in_progress,completed'
        ];
    }
}
