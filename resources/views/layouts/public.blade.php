<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen overflow-x-hidden antialiased">

        @include('partials.navbar')

        <main class="min-w-0">
            {{ $slot }}
        </main>

        @include('partials.footer')

        @fluxScripts
        {{ $scripts ?? '' }}
    </body>
</html>
