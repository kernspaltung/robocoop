@extends('layouts.admin')

@section('title','Usuarios')       

@section('id','user')       

@section('content')       

    <h1>{{ $user ? 'Editar' : 'Nuevo' }} Usuario</h1>
    
    {!! Form::open( array('url'=> 'http://localhost:8000/api/v0/user/' . ( $user ? $user->id : '' ), 'method' => $user ? 'put' : 'post', 'class' => 'row user-form' ) ) !!}

        <label for="new_user_name">Name</label>
        <input type="text" id="new_user_name" name="name"{{ $user ? 'value='.$user->name : '' }}>

        <label for="new_user_username">Username</label>
        <input type="text" id="new_user_username" name="username"{{ $user ? 'value='.$user->username : '' }}>

        <label for="new_user_email">E-mail</label>
        <input type="email" id="new_user_email" name="email"{{ $user ? 'value='.$user->email : '' }}>

        <label for="new_user_password">Password</label>
        <input type="password" id="new_user_password" name="password"{{ $user ? 'value='.$user->password : '' }}>

    {!! Form::submit( "Enviar", ["class"=>"button"] ) !!}
        
        @if($user)
            
            {!! Form::close() !!}
            
            {!! Form::open( array('url'=> 'http://localhost:8000/api/v0/user/' . $user->id, 'method' => 'delete', 'class' => 'row user-form' ) ) !!}        
                {!! Form::submit("Eliminar Usuario", ["class"=>"button alert"] ) !!}
            {!! Form::close() !!}

        @endif

    </form>

@endsection
api/v0/user/29