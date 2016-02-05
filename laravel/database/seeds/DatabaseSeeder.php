<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
	public function run()
	{
        factory(App\User::class, 30 )->create();//->each(function($u) {});       
        factory(App\Task::class, 20 )->create();
        factory(App\Job::class, 3 )->create();
        
        $tasks = App\Task::all();

        foreach ($tasks as $task ) {       
        	$task->users()->sync( $task->asignees );
            $task->task()->save( $tasks->random()->first()->id );
        }

    }
    
    public function scopeRandom($query)
    {
        return $query->orderBy(DB::raw('RAND()'));
    }

}