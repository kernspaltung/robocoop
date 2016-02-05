@extends('layouts.master')


    @section('section_id')
        admin-@yield('id')
    @endsection

    @section('admin-menu')
        menu
    @endsection


@section('header')



    <div class="small-12 medium-2 columns">
        {!! HTML::image('http://fakeimg.pl/75x75/fff,0/000') !!}
    </div>


    <div class="small-12 medium-8 columns">@yield('admin-menu')</div>
    <div class="small-12 medium-2 columns">Cuenta</div>



@endsection


@section('section_id')


    admin-@yield('id')


@endsection
