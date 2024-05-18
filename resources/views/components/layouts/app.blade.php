<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <x-nav.nav>

        </x-nav.nav>


        @if ($errors->any())
            <script>
                Swal.fire({
                    icon: "error",
                    title: 'Error',
                    text: "{!! collect($errors->all())->implode(' ') !!}",
                    type: 'error',
                });
            </script>
        @endif

        <div class="m-3">
            {{ $slot }}
        </div>
    </body>
</html>
