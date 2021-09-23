<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


    </head>
    <body>
        <div class="container">        
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <a class="navbar-brand">NASA API</a>
                <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="my-nav" class="collapse navbar-collapse"> 
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                            <a class="nav-link" href="{{route('/')}}">Astronomy Picture of the Day</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{route('json')}}" tabindex="-1" aria-disabled="true">JSON placeholder</a>
                    </li>
                    </ul>
                </div>
        </nav>
        
        @yield('content')
    </div>

    </body>
    
    <script  src="https://code.jquery.com/jquery-3.6.0.js"  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="  crossorigin="anonymous"></script> 
    <script src="{{asset('js/apod.js')}}"></script>
    <script src="{{asset('js/jsonPlaceholder.js')}}"></script>

</html>
