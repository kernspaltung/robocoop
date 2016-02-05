<?php 

namespace App\Http\Controllers;


use Request;

use Hash;
use Redirect;

use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\View;

class WebsiteController extends Controller {

public function index()
{
 
  return view('welcome');

}

public function users(){
  $users = User::all();
  $view = view('users', ['users'=>$users] );
  return $view;
 
}


}

?>