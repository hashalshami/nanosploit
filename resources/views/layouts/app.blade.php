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
    <link href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic:wght@400..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @livewireStyles
</head>

<body class="font-ar antialiased bg-gray-100  dark:bg-dark-body">
    <div class="min-h-screen w-full " x-data="{ sidebar:  window.innerWidth >= 1000  }" 
        x-init="
    window.addEventListener('resize', () => {
        sidebar = window.innerWidth >= 1000;
    });">
        <x-layout.header :menu="$menu" />

        <!-- drawer component -->

        <!-- Page Content -->
        <main x-cloak
            @if ($menu) :class="{ 'md:mr-64': sidebar, 'md:mr-0': !sidebar }"
            class="transition-[margin] ease-in-out duration-300 " @endif>
            {{ $slot }}

        </main>

        @if ($menu)
            <aside x-cloak x-show="sidebar" @keydown.escape.window="sidebar = false"
                x-transition:enter="transition transform ease-in-out duration-300"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="-translate-x-0"
                x-transition:leave="transition transform ease-in-out duration-300"
                x-transition:leave-start="-translate-x-0" x-transition:leave-end="translate-x-full"
                class="fixed border-t dark:border-gray-700 top-16 right-0 z-40 w-64 overflow-y-scroll min-h-screen p-4  bg-white dark:bg-gray-900">

                <h5 class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400"></h5>
                <button @click="sidebar = false"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 left-2.5 dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                @isset($sidebar)
                    {{ $sidebar }}
                @endisset
            </aside>
        @endif
    </div>

    
    @livewireScripts
    {{-- @livewireScriptConfig --}}
</body>
<script src="{{ asset('js/main.js') }}"></script>

</html>
