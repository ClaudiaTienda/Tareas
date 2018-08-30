<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Legion-Ardiente</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 80vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .mitad {
                position: absolute;
                top:50%;
                right:250px;
            }

            .content {
                text-align: center;
                height: 20vh;
            }

            .title {
                font-size: 40px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                height: 100vh;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .piepagina{
               /* padding-top: 30px;*/
                align-items: center;
                height: 20vh;
            }
            .esferas {
                
                padding: 0 25px;
            }
        </style>
    </head>
    <body>
        <div>
            <p class="title">
                    Ðev L3gion   
            </p>             
            <p class="flex-center position-ref">
            @if (Route::has('login'))
                <p class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </p>    
            @endif
        </p>
        <div>
            <div class="content">
                <div class="esferas">
                    <img src="/Images/matrix.gif" width="100%" height="100%" class="flex-center position-ref">
                        <div class="mitad">                
                            <img class="esferas" src="/Images/HTML.png" height=150px>
                            <img class="esferas" src="/Images/java.png" height=150px>
                            <img class="esferas" src="/Images/PHP.png" height=150px>
                            <img class="esferas" src="/Images/PYTHON.png" height=150px>
                            <img class="esferas" src="/Images/c.png" height=150px>
                        </div>
                </div>
                <div class="links piepagina">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
