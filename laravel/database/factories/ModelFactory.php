<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->userName,
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Task::class, function (Faker\Generator $faker) {

    $users = App\User::all()->lists('id')->all();

	return [
	    'name'=> $faker->realText(30),
	    'description'=> $faker->realText(200),
	    'extra_info'=> $faker->realText(200),
	    'date_expected'=> $faker->dateTime('+ 1 month'),
	    'date_finished'=> $faker->dateTime('+ 1 month'),
	    'duration_expected'=> mt_rand(1,16)*15,
	    'duration_finished'=> mt_rand(1,16)*15,
	    'done'=> $faker->boolean(),
	    'status'=> rand(0,6),
	    'asignees'=> $faker->randomElements( $users, mt_rand(1,11) ),
	];
});

$factory->define(App\Job::class, function (Faker\Generator $faker) {

    $users = App\User::all()->lists('id')->all();
    $tasks = App\Task::all()->lists('id')->all();

	$deliverables = array();
	for ($i=0; $i < mt_rand(2,7); $i++) { 
		array_push($deliverables,1);
	}	
	$sessions = array();
	for ($i=0; $i < mt_rand(2,7); $i++) { 
		array_push($sessions,1);
	}
	$materials = array();
	for ($i=0; $i < mt_rand(2,7); $i++) { 
		array_push($materials,1);
	}
	$payments = array();
	for ($i=0; $i < mt_rand(2,7); $i++) { 
		array_push($payments,1);
	}


	return [
		'name'=> $faker -> realText(30),
		'description'=> $faker -> realText(200),
		'status'=> mt_rand(0,6),
		'deliverables'=> $deliverables,
		'administrators'=> $faker->randomElements( $users, mt_rand(1,11) ),
		'members'=> $faker->randomElements( $users, mt_rand(1,11) ),
		'tasks'=> $faker->randomElements( $tasks, mt_rand(2,7) ),
		'sessions'=> $sessions,
		'materials'=> $materials,
		'payments'=> $payments,
	];
});
