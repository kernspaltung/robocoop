@extends('layouts.master')

@section('title','Cooperativas')       

@section('id','home')       

@section('content')       

    <h1>Nueva Cooperativa</h1>
    
    <form action="http://localhost:8000/api/v0/coop" method="post" id="form_new_coop" class="row">

        <label for="new_coop_name">Name</label>
        <input type="text" id="new_coop_name" name="name"/>

        <div class="repeatables row">
        	
        	@for ($i=0;$i<2;$i++)
        		
        		<div class="repeatable {{ $i==0 ? 'hidden ' : '' }}row">
        		<select name="administrators[]" class="new_coop_administrators">
        			@foreach( $users as $user )
        				<option value="$user->id">
        					{{$user->name}}
        				</option>
        			@endforeach
        		</select>
    			<button class="repeatable_remove {{ $i==1 ? 'hidden ' : '' }}"><span class="fa fa-close"></span>Eliminar</button>
        	</div>
        	@endfor
    		<button class="repeatable_add">Añadir Repetible</button>
        </div>

        <input type="submit">

    </form>

@endsection
