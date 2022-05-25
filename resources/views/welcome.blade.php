<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Trade Apps Practical</title>
        
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div id="app">
            <app-component></app-component>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
