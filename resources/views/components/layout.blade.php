<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Enums powers</title>

    </head>
    <body class="antialiased">
        <div class="relative min-h-screen bg-gray-100 bg-center">
            <div class="p-6 mx-auto max-w-7xl lg:p-8">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
