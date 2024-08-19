 <main x-cloak
     @if ($menu) :class="{ 'md:mr-64': sidebar, 'md:mr-0': !sidebar }"
            class="transition-[margin] ease-in-out duration-300" @endif>
     {{ $slot }}

 </main>
