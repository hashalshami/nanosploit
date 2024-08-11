@props([
    'title' => 'nanosploit',
])
<x-app-layout :title="$title">
    <div x-data="{ sidebar: false }">
        <x-layout.header :menu="true" />

        <!-- drawer component -->

        <!-- Page Content -->
        <main :class="{ 'md:mr-64': sidebar, 'md:mr-0': !sidebar }"
            x-transition:enter="transition transform ease-in-out duration-300" x-transition:enter-start="translate-x-full"
            x-transition:enter-end="-translate-x-0" x-transition:leave="transition transform ease-in-out duration-300"
            x-transition:leave-start="-translate-x-0" x-transition:leave-end="translate-x-full"
            class="transition-[margin] ease-in-out duration-300 ">
            {{ $slot }}
        </main>

        @isset($sidebar)
            {{$sidebar}}
        @endisset
           

    </div>
</x-app-layout>
