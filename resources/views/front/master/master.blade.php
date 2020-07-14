<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>LaraDev - @yield('title', 'App Default')</title>
</head>
<body>

@include('front.master.includes.header')

@yield('content')

@include('front.master.includes.footer')

<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
