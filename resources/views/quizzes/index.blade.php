<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@yield('title','QuizApp')</title><meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- StyleSheet -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <style>
    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .top-left {
        position: absolute;
        left: 10px;
        top: 18px;
        font-size: 15px;
        color: gray;
        font-weight: 600;
    }
    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }
    .full-height {
        height: 50px;
        background: white;
        padding:30px;
        border-bottom: 0.5px solid gray;
    }
    .links > a {
        /* color: #636b6f; */
        color: #2c3e50;
        padding: 0 25px;
        font-size: 15px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
    </style>
<body>
<div class="flex-center position-ref full-height">
@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
    
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>

            
        @endauth
    </div>
    <div class="top-left links">
        @auth
            You are logged in, {{ Auth::user()->name }}
            
        @endauth
    </div>
@endif
</div>

    <div class="container" 
        style="background: #ffffff; padding:20px; margin-top:20px;">
        <form class="quiz" style="color:#000000;">
        {{ csrf_field() }}
            @foreach($questions as $question)
                <div class="question">
                    <p>{{$question->text}}</p>
                </div>

                <div class="choices-group"> 
                    <ul type="a" class="choices" style="list-style:none;">
                        @foreach($question->choices as $choice)
                            <li>
                                <input class="choice isCorrect={{ $choice->is_correct }}" 
                                    name="choice{{ $loop->parent->iteration }}" type="radio">
                                {{ $choice->text }} 
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
            <div class="text-center">
            <input type="submit" value="Submit" class="btn btn-lg btn-primary"></span>
            </div>
        </form>
        
    </div>
    <div class="error-msg text-center" style="color:black; font-size:20px;"></div>
    <div class="result text-center"></div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>