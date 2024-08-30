<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" class="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <x-dashboard.head></x-dashboard.head>
</head>

<body class=" font-inter dashcode-app" id="body_class">
    <main class="app-wrapper">
        <!-- BEGIN: Sidebar -->
        <x-dashboard.sidebar></x-dashboard.sidebar>
        <!-- End: Sidebar -->


        <!-- BEGIN: Settings Modal -->
        {{-- <x-dashboard.setting></x-dashboard.setting> --}}
        <!-- END: Settings Modal -->
        {{ $slot }}
    </main>
    @stack('modals')

    @livewireScripts

    <x-dashboard.script></x-dashboard.script>
</body>

</html>
