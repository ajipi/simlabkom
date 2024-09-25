<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home - SIMLABKOM</title>
</head>

<body>
    <div class="antialiased">
        <!-- Header -->
        @include('layout.header')

        <!-- Sidebar -->
        @include('layout.sidebar')

        <!-- Content -->
        @yield('content')
    </div>
</body>

</html>
