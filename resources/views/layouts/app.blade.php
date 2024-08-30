<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>


    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}" style="width: 16px; height: 16px">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght,HEXP@160..700,0..100&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="font-ar text-base font-medium antialiased dark:text-dark-text-main dark:bg-dark-body bg-gray-200/80 "
    x-data="{ sidebar: window.innerWidth >= 1000 }" x-init="window.addEventListener('resize', () => {
        sidebar = window.innerWidth >= 1000;
    });">
    <x-header :menu="$menu" />
    @isset($sidebar)
        <x-sidebar>
            {{ $sidebar }}
        </x-sidebar>
    @endisset
    <div class="min-h-screen w-full ">

        <!-- drawer component -->

        <!-- Page Content -->
        <div x-cloak
            @if ($menu) :class="{ 'md:mr-64': sidebar, 'md:mr-0': !sidebar }"
        class="transition-[margin] ease-in-out duration-300" @endif>
            <main>

                {{ $slot }}

            </main>
            <x-footer />

        </div>


    </div>


    @livewireScripts
    {{-- @livewireScriptConfig --}}
</body>
<script src="{{ asset('js/main.js') }}"></script>

</html>
