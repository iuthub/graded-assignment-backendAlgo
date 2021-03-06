<?php

use Illuminate\Database\Seeder;
use App\Task;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new Task([
            'name' => 'Hit the gym'
        ]);
        $task->save();

        $task = new Task([
            'name' => 'Make some food'
        ]);
        $task->save();

        $task = new Task([
            'name' => 'Finish quiz'
        ]);
        $task->save();
        
    }
}
