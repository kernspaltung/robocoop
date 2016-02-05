<?php

header('Access-Control-Allow-Origin: http://localhost:8079');
header('Access-Control-Allow-Credentials: true');

// Route::get('api/v0/users', ['uses' => 'UsersController@index','middleware'=>'simpleauth']);
// Route::post('api/v0/users', ['uses' => 'UsersController@store','middleware'=>'simpleauth']);

// Route::get('api/v0/tasks', ['uses' => 'TasksController@index','middleware'=>'simpleauth']);
// Route::post('api/v0/task', ['uses' => 'TasksController@store','middleware'=>'simpleauth']);


Route::get('api/v0/tasks', ['uses' => 'TasksController@index' ]);
Route::post('api/v0/task', ['uses' => 'TasksController@store' ]);
 

Route::get('api/v0/users', ['uses' => 'UsersController@index']);
Route::post('api/v0/user', ['uses' => 'UsersController@create']);
Route::get('api/v0/user/{id}', ['uses' => 'UsersController@read']);
Route::put('api/v0/user/{id}', ['uses' => 'UsersController@update']);
Route::delete('api/v0/user/{id}', ['uses' => 'UsersController@delete']);


// frontend:

Route::get('users', ['uses' => 'WebsiteController@users']);
Route::get('user/:id', ['uses' => 'WebsiteController@user']);


// admin backend:

Route::get('admin', ['uses' => 'AdminController@index']);

Route::get('admin/users', ['uses' => 'AdminController@users']);
Route::get('admin/users/new', ['uses' => 'AdminController@user']);
Route::get('admin/users/{id}', ['uses' => 'AdminController@user']);

Route::get('admin/coops', ['uses' => 'AdminController@coops']);
Route::get('admin/coops/new', ['uses' => 'AdminController@coop_new']);

Route::get('admin/jobs', ['uses' => 'AdminController@jobs']);
Route::get('admin/jobs/new', ['uses' => 'AdminController@job_new']);

Route::get('admin/tasks', ['uses' => 'AdminController@tasks']);
Route::get('admin/tasks/new', ['uses' => 'AdminController@task_new']);


 

Route::get('/', function(){
	return View::make('welcome');
});