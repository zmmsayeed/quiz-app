<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@yield('title','QuizApp')</title>
        @include('partials.head')
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @include('partials.nav')

            @yield('content')

           
        </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
