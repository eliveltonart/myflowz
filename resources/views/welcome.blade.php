<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- Styles -->
        <link href="{{ asset('defaults/css/wave.css') }}" rel="stylesheet">
        <style>
            html, body {
                
                color: rgba(54, 126, 115, 0.5);
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                
                margin: 0;
                overflow: hidden;
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
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .head{
                opacity: 0.6;
                right: -50px;
                bottom: -90px;
                position: absolute;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
          <div class="centro">
            <h1 class="absolom">Flowz</h1>
            <h2 class="consulting">be the flow</h2>
          </div>
            <div class="capatv"></div>
        </div>
        <div class="overlay"></div>
        <div class="overlay glitch"></div>
        <img class="head" src="{{ asset('defaults/img/head.png') }}" />
    </body>
</html>
