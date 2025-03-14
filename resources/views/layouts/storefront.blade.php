<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <title>BoutiquedeBelleza</title>
    <meta
        name="description"
        content="Recibe tu Belleza a Domicilio"
    >
    <link
        href="{{ asset('css/app.css') }}"
        rel="stylesheet"
    >   
    <link 
        rel="stylesheet" href="{{ asset('css/banner.css') }}"
    >

    <link
        rel="icon"
        href="{{ asset('favicon.svg') }}"
    >
    @livewireStyles
</head>

<body class="antialiased text-gray-900">
    @livewire('components.navigation')

    <main>
        {{ $slot }}
    </main>

    <x-footer />

    @livewireScripts
    <script src="{{ asset('js/banner.js') }}"></script>
</body>

</html>
