<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen">

        @include('partials.navbar')

        {{ $slot }}

        @include('partials.footer')

        @fluxScripts
        {{ $scripts ?? '' }}
    </body>
</html>
