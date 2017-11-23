<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('titulo', 'Hugo Costa')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

                <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #02a2ff;
                color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
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

            .content {
                padding-top: 20%;
                text-align: center;
                font-size: 32px;
            }

            .title {
                font-size: 84px;
                
            }

            .links{
                color: #fff;
                padding: 0 25px;
                font-size: 24px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            /* NAV */
            .nav {
            float: right;
            padding: 20px 0 0 0;
            }

            li {
            float: left; /* makes list horizontal */
            list-style-type: none;
            margin: 0 0 0 30px; /* separates 'buttons' */
            }

            a {
            padding: 10px 15px; /* makes target area bigger */
            color: #333; /* rgba backup */
            color: rgba(255,255,255, 0.8);
            text-decoration: none;
            font-weight: bold;
            text-shadow: 0 1px 1px rgba(0,0,0, 0.3);
            -webkit-transition: all 0.75s ease-in-out;
            -moz-transition: all 0.75s ease-in-out;
            -o-transition: all 0.75s ease-in-out;
            transition: all 0.75s ease-in-out;
            }

            a:hover, a:focus {
            color: #fff;
            background: #fff; /* rgba backup */
            background: rgba(255,255,255, 0.2);
            -webkit-border-radius: 4px; /* safari & chrome */
            -moz-border-radius: 4px; /* firefox */
            border-radius: 4px; /* futureproof */
            }
                        
        </style>
    </head>
    <body>
   @section('menu')
        <ul class="nav">
            <li><a href="/">Inicio</a></li>
            <li><a href="sobre">Sobre</a></li>
            <li><a href="contato">Contato</a></li>
        </ul>
   @show

    <div>
        @yield('conteudo') 

    </div>


    </body>
</html>