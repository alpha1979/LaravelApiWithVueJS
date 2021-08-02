<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="url" content="{{url('')}}">
        <title>{{config('app.name','Movie Quote Test')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        

       
    </head>
    <body >
        <div id="app">
            
            <app></app>
        </div>
        
    </body>
    <script src="{{mix('js/app.js')}}"></script>
</html>
