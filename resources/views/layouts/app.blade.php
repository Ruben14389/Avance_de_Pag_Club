<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Devstragram - @yield('titulo')</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100">
        <nav>
            <a href="/">Principal</a>
            <a href="/nosotros">Nosotros</a>
            <a href="/tienda">Tienda</a>
        </nav>


        <h1 class="text-4xl font-extrabold">@yield('titulo')</h1>
        {{-- <h2>@yield('contenido')</h2> --}}
        <hr>
        @yield('contenido')
        <hr>

    </body>
</html>    