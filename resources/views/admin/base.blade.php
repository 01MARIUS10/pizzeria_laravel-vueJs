<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Pizzeria' }}</title>

        {{-- icon --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="">
        <x-shared.navbar />
        <main>
            <div id="content" class=" d-flex h-100 w-100">
                <x-shared.sidebar />
                <div id="main_content">
                    @yield('admin-content')
                </div>
            </div>
        </main>
        {{-- <div id="app" ></div> --}}
        <!-- On importe le fichier « /public/js/app.js » -->
        <script type="text/javascript   " src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>
