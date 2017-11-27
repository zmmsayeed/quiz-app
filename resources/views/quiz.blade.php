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

<body>
    <div class="container">
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
                                <input class="choice isCorrect={{ $choice->is_correct }}" name="choice{{ $loop->parent->iteration }}" 
                                    type="radio">
                                {{ $choice->text }} 
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
            <input type="submit" value="Submit" class="btn btn-priamry">
        </form>
    </div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>