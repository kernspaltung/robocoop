<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
 
 
   public function index() {
 
   	$tasks = Task::all();
   	return $tasks;
   }
 
   
   public function store() {
      $task = new Task(Request::all());
      
      // foreach( $task->asignees as $asignee ) {
      // 	$User::find($asignee)->tasks()->attach( $task -> id );
      //    $users = $task->users()->withPivot('name'); echo 
      // }
   }
 
 
 
}
