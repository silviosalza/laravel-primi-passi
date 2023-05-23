<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>{{ $title }}</h1>
        <h2>Studendi:</h2>
        <ul>
            @foreach ($students as $student)
            <li>{{$student}}
                @if($loop ->last)
                    .
                @else
                    ,
                @endif</li>
            @endforeach
        </ul>

        <h2>Insegnanti</h2>

        @if (count($teachers) === 0)
        <h3>Non ci sono insegnanti assegnati</h3>

        @else
        <ul>
            @foreach($teachers as $teacher)
            <li>
                {{$teacher}}
            </li>
            @endforeach
        </ul>
                 
        @endif

        <a href="/about">About link</a>
    </body>
</html>
