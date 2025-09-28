<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" scroll-smooth>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- icon -->
        <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

        <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

        <title>{{ $title ?? 'Vos Bouw - Bouw- en aannemersberdrijf' }}</title>
        @vite('resources/css/app.css')
    </head>
    <body class="overflow-x-hidden font-rubik scroll-smooth">
        <div>
            <div>
                <x-navbar></x-navbar>
            </div>
            {{ $slot}}
            <x-footer></x-footer>
        </div>
        <livewire:toast />
    </body>
</html>
