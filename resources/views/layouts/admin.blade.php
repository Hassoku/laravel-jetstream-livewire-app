<
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @livewireStyles
        <link href="{{ asset('css/tail.css') }}" rel="stylesheet">


        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>
    <body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
        <div class="min-h-screen flex">
            <div class="py-12 px-10 w-1/4">
            @include('layouts.partials.sidebar')
            </div>
            <div class="bg-indigo-50 flex-grow py-12 px-10">

            </div>
        </div>








</body>

</html>

