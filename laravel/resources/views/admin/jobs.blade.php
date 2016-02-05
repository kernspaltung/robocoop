@extends('layouts.master')

@section('title','Chambas')       

@section('id','jobs')       

@section('content')       

    <h1>Chambas</h1>

    @foreach( $jobs as $job )

        <h1>{{$job->name}}</h1>

    @endforeach

@endsection
