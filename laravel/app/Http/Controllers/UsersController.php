<?php 

namespace App\Http\Controllers;


use Request;

use Hash;
use Redirect;

use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\View;

class UsersController extends Controller {

public function index()
{
  $users = User::all();  
  return $users;
}

public function create() {
  $user = User::create(Request::all());
  return $user;
}

public function read($id)
{
  $user = User::find( $id );
  return $user;
}

public function update($id)
{
  $user=User::find($id);
  $update=Request::all();
  $user->fill($update);
  $user->save();
  return $user;
}

public function delete($id)
{
  User::find($id)->delete();
  return 1;
}


}

?>