<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Pizzeria' }}</title>

        {{-- icon --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body class="">
        <nav style="min-width: 1600px;">
            <x-shared.navbar />
        </nav>
        <main style="min-width: 1600px;">
            <div id="content" class=" d-flex h-100 w-100">
                <x-shared.sidebar />
                <div id="main_content"  class="pb-4">
                    @yield('admin-content')
                </div>
            </div>
        </main>
        {{-- <div id="app" ></div> --}}
        <!-- On importe le fichier « /public/js/app.js » -->
        <script type="text/javascript" src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>
