<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@200&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #F77F00
        }

        .links {
            display: flex;
            justify-content: center;
            gap : 20px;
            padding: 20px;
            line-height: 20px;
            color: #003049;
        }

        .centered {
            position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -50px;
            margin-left: -100px;
            color: #003049;
            font-family: 'JetBrains Mono', monospace;

        }

        .sub-title {
            margin-top: 10px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="links">
            <a href="{{ route('homepage') }}">Homepage</a>
            <a href="{{ route('where') }}"> Where am I?</a>
            <a href="{{ route('about') }}"> About </a>
        </div>
        <div class="centered">
            <h1>Where am I?</h1>
        </div>

    </div>
</body>

</html>
