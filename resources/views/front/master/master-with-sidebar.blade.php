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

<div class="container">
    <div class="row">
        <div class="col-8">
            @yield('content')
        </div>
        <div class="col-4">
            {{--@yield('sidebar')--}}
            @section('sidebar')
                <h1>Cursos</h1>

                <ul>
                    <li>Lorem ipsum dolor sit.</li>
                    <li>Ducimus repellat sapiente sit.</li>
                    <li>Assumenda expedita ipsa sequi.</li>
                    <li>Ea fugiat vel voluptatibus.</li>
                    <li>Molestias qui sit vel.</li>
                </ul>

            @show
        </div>
    </div>
</div>

@include('front.master.includes.footer')

<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
