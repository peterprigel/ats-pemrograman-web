<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>24THRIFT</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
        {{-- <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'> --}} 
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        {{-- <div class="container py-5"> --}}
        {{-- navbar --}}
        @if (Request::is('login'))
        @elseif (Request::is('signup'))
        @else
            @include('inc.navbar')
        @endif
    
    @if (Request::is('login'))
        {{-- @include('inc.msg') --}}
        <div style="margin-top:67px;">
    @elseif (Request::is('signup'))
        {{-- @include('inc.msg') --}}
        <div style="margin-top:67px;">
    @else
        <div class="lokal-container">
    @endif
            {{-- flash message --}}
            {{-- @include('inc.pesan') --}}

            {{-- content --}}
            @yield("content")

            {{-- footer --}}
            {{-- @include('inc.footer') --}}
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>