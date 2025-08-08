<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() :void
    {
        $tasks = [
            [
                'title' => 'Exposition',
                'description' => 'I want to buy pans on sale',
                'status' => 'pending',
            ],
            [
                'title' => 'Setup',
                'description' => 'The nearest stores are closed',
                'status' => 'in_progress',
            ],
            [
                'title' => 'Rising Action',
                'description' => 'The only open store is far away',
                'status' => 'in_progress',
            ],
            [
                'title' => 'Climax',
                'description' => 'Arrived 5 minutes before closing',
                'status' => 'in_progress',
            ],
            [
                'title' => 'Resolution',
                'description' => 'The pans were sold out',
                'status' => 'completed',
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
