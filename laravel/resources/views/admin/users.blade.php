@extends('layouts.admin')

@section('title','Usuarios')       

@section('id','users')       

@section('content')       

<h1>Usuarios</h1>

<div class="row list_header">
	
	<div class="small-1 columns">
		<h3>
			ID
		</h3>
	</div>
	<div class="small-3 columns">
		<h3>
			Nombre de usuario
		</h3>
	</div>
	<div class="small-3 columns">
		<h3>
			E-mail
		</h3>
	</div>
	<div class="small-5 columns">			        
		<h3>
			Tareas
		</h3>
	</div>
	
</div>


@foreach( $users as $user )

	<div class="row user">
		<div class="small-1 columns small">
			{!! HTML::link('http://localhost:8000/admin/users/' . $user->id, $user->id ) !!}
		</div>
		<div class="small-3 columns">
			<div>
				{!! HTML::link('http://localhost:8000/admin/users/' . $user->id, $user->username ) !!}
			</div>
			<div>
				{{$user->name}}
			</div>
		</div>
		<div class="small-3 columns">
			<small>
				<a href="mailto:{{$user->email}}">{{$user->email}}</a>
			</small>
		</div>
		<div class="small-4 columns">			        
			@foreach($user->tasks as $task)
			<div class="row">
				{!! $task->name !!}
			</div>
			@endforeach
		</div>
		<div class="small-1 columns">			        
			{!! Form::open(array('url' => 'http://localhost:8000/api/v0/user/' . $user->id, 'method' => 'delete', 'class'=>'row')) !!}
			{!! Form::submit("X", ['class' => 'button alert']) !!}
			{!! Form::close() !!}
			</form>			
		</div>
	</div>

@endforeach

@endsection
