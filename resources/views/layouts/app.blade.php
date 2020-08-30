<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <section class="px-4 py-4">
            <header class="container mx-auto">
                <div class="flex items-center mb-4">
                    <img src="/images/logo.svg" alt="Twitter logo">Tweety
                </div>
            </header>
        </section>
        <section class="px-4">
            <main class="container mx-auto" style="position: relative;">
                @yield('content')
            </main>
        </section>
    </div>


    {{--(It will not reload the page) For reloading the page faster --}}
    {{-- it sends ajax request to server and accpet eveything except the body tag and inserts it with javascript --}}
    {{-- <script src="https://www.unpkg.com/turbolinks"></script> --}}

</body>

</html>
