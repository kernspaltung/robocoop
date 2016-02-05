<?php 

namespace App\Http\Controllers;


use Request;

use Hash;
use Redirect;

use App\Coop;
use App\Job;
use App\Task;
use App\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\View;



class AdminController extends Controller {

public function index()
{
 
  return "login";
}



public function coops(){
  $users = Coop::all();
  $view = view('admin.coops', ['coops'=>$coops] );
  return $view;
 
}

public function coop_new(){
  $users = User::all();
  $view = view('admin.coop_new', ['users'=>$users]);
  return $view;
}



public function jobs(){
  $jobs = Job::all();
  $view = view('admin.jobs', ['jobs'=>$jobs] );
  return $view;
 
}

public function job_new(){
  $users = User::all();
  $view = view('admin.task_new', ['users'=>$users] );
  $view = view('admin.job_new');
  return $view;
}


public function tasks(){
  $tasks = Task::all();
  // $taskUsers = array();

  $view = view('admin.tasks', ['tasks'=>$tasks] );
  return $view;
 
}

public function task_new(){
  $users = User::all();
  $view = view('admin.task_new', ['users'=>$users] );
  return $view;
}




public function users(){
  $users = User::all();
  $view = view('admin.users', ['users'=>$users] );
  return $view;
}
public function user_new(){
  $view = view('admin.user_new');
  return $view;
}
public function user($id=0){
  $data = array();
  if( $id ) {
    $user = User::find($id);
  }
  else  {
    $user = NULL;
  }
  $data = ['user'=>$user];
  $view = view('admin.user',$data);

  return $view;
}


}

?>