@section('header')
    HEADER
@endsection

@section('section_id')
    master
@endsection

<html>
    <head>
        <title>COOP - @yield('title')</title>
        {!! HTML::style('css/app.css') !!}
    </head>
    <body>
        <header id="header" class="row">            
            @yield('header')
        </header>

        <section id="@yield('section_id')" class="row">
            @yield('content')        
        </section>
        {!! HTML::script('js/vendor.js') !!}
    </body>
</html>