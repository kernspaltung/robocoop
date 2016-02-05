@extends('layouts.master')

@section('title','Tareas')       

@section('id','home')       

@section('content')       

    <h1>Nueva Tarea</h1>
    
    <form action="http://localhost:8000/api/v0/task" method="post" id="form_new_task" class="row">

        <label for="new_task_name">Name</label>
        <input type="text" id="new_task_name" name="name"/>

        <input type="submit">

    </form>

@endsection
