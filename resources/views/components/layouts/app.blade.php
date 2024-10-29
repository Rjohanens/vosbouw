<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" scroll-smooth>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Vos Bouw - Bouw- en aannemersberdrijf' }}</title>
        @vite('resources/css/app.css')
    </head>
    <body class="overflow-x-hidden font-rubik">
        <div>
            <x-navbar></x-navbar>
            {{ $slot}}
            <x-footer></x-footer>
        </div>
    </body>
</html>
