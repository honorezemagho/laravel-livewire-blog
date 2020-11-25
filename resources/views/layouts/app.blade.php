<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Blog')</title>
    <link rel="stylesheet" href="{{ asset('./css/tailwind.min.css') }}">
    @livewireStyles
</head>
<body>

    <x-header></x-header>

    @yield('content')

    @livewireScripts

</body>
</html>
