<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="cover">
            <div class="container">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8 text-center">
                        <h1>STUDENT FOLLOW UP SYSTEM</h1>
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                        <a href="{{ url('/home') }}">Home</a>
                                    @else
                                        <a class="btn btn-outline-success" href="{{ route('login') }}">Login</a>
                
                                        @if (Route::has('register'))
                                            <a class="btn btn-outline-primary" href="{{ route('register') }}">Register</a>
                                        @endif
                                    @endauth
                            @endif
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </div>
    </body>
</html>
