<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Head Section -->
    @section('head')
        <title>{{ config('app.name') }}</title>
    @show

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="global-container">
        <main class="main-container">
            @yield('content')
        </main>
    </div>
</body>

</html>
