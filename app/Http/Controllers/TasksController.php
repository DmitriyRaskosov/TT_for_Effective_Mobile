<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Task;

class TasksController extends BaseController
{
    protected $modelClass = Task::class;

    protected static array $attributes = [
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'status' => 'required|string|in:pending,in_progress,completed'
    ];

    /**
     * @throws \Exception Если валидация не пройдена
     */
    protected static function validationRules($request): array
    {
        $allowedKeys = array_keys(self::$attributes);
        $requestKeys = array_keys($request->all());

        // Проверяем лишние поля
        $extraKeys = array_diff($requestKeys, $allowedKeys);
        if (!empty($extraKeys)) {
            throw new \Exception('Недопустимые поля: ' . implode(', ', $extraKeys));
        }

        // Стандартная валидация
        $validator = Validator::make($request->all(), self::$attributes);

        if ($validator->fails()) {
            throw new \Exception("Неверный атрибут: " . $validator->errors()->first());
        }

        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string|in:pending,in_progress,completed'
        ];
    }
}
