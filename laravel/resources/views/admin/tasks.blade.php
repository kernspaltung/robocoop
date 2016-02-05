@extends('layouts.admin')

@section('title','Tareas')       

@section('id','tasks')       

@section('content')       

<h1>Tareas</h1>

<div class="row list_header small-up-3">
	<div class="column">
		<h3>
			Nombre y descripción
		</h3>
	</div>
	<div class="column">
		<h3>
			Fecha esperada
		</h3>
	</div>
	<div class="column">			        
		<h3>
			Encargados
		</h3>
	</div>
</div>


    @foreach( $tasks as $task )

		<div class="row">
			<div class="user small-up-3">
				<div class="column">
					<a href="tasks/{{$task->id}}">
						{{$task->name}}
					</a>
				</div>
				<div class="column">
			        {{$task->date_expected}}
				</div>
				<div class="column">
			      <div class="hover_sibling">
			      	{{ count( $task->users ) }}
			      </div>
			      <div class="hoverable_sibling hidden">
			      	
		          @foreach($task->users as $user)
			        <div class="row fontXS">
					    {!! $user->username !!}
			        </div>
				  @endforeach
			      </div>

				</div>
			</div>
		</div>

    @endforeach

@endsection
