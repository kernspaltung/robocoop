@extends('layouts.master')

@section('title','Cooperativas')       

@section('id','coops')       

@section('content')       

    <h1>Cooperativas</h1>

    @foreach( $coops as $coop )

        <h1>{{$coop->name}}</h1>

    @endforeach

@endsection
