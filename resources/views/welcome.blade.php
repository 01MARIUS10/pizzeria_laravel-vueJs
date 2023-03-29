<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body class="">

        {{-- <div id="app" ></div> --}}
        <!-- On importe le fichier « /public/js/app.js » -->
        <script type="text/javascript   " src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>
