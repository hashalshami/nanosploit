<div class="h-16"></div>
<header 
class="h-16 z-50 w-full bg-slate-800 dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 fixed top-0 right-0 left-0 ">
    <!-- Primary Navigation Menu -->
    <div class="px-2 flex justify-between h-full ">
        <div class="flex">
            <!-- Hamburger -->
            <div class="ms-2 flex items-center w-11" >
               @if($menu)
                 <button @click="sidebar = !sidebar" :class="{ 'dark:bg-gray-900': sidebar,  }"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-200 hover:text-gray-500 dark:hover:text-gray-100 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-100 transition duration-150 ease-in-out">
                    <svg class="h-7 w-7" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': sidebar, 'inline-flex': !sidebar }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !sidebar, 'inline-flex': sidebar }" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
               @endif
            </div>
            <!-- Logo -->

            <div class="flex items-center">
                <button id="theme-toggle" type="button"
                    class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
               
            </div>

            <!-- Navigation Links -->

        </div>
        <div class="flex items-stretch justify-center px-2 gap-x-3">
             

                <x-app.nav-link :href="route('home')" :active="request()->routeIs('home')">
                  <x-icons.home class="w-6 dark:fill-gray-300 inline-block mx-2 " />
                </x-app.nav-link>
                 <x-app.nav-link :href="route('about')" :active="request()->routeIs('about')">
                  حول
                </x-app.nav-link>
               <div class="hidden">
                 <x-app.nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-app.nav-link>
               </div>
        </div>
        <div class="flex items-center justify-center ">

           
             @guest
                    <div class="flex items-center">
                       
                        <div class="relative inline-flex font-serif">
                            <a href="{{ route('login') }}" wire:navigate
                                class="inline-flex items-center px-3 py-1 border border-gray-700 leading-6 text-sm shadow rounded-md text-white font-semibold bg-slate-800 transition ease-in-out duration-150 cursor-pointer ring-1 ring-slate-900/10 ">
                                <span> دخول</span>
                            </a>
                            <span class="flex absolute h-3 w-3 top-0 right-0 -mt-1 -mr-1">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-sky-500"></span>
                            </span>
                        </div>


                    </div>
                @else
                    <x-app.dropdown align="right">
                        <x-slot name="trigger">
                            @php
                                $userName = Auth::user()->name;
                                $initials = strtoupper(substr($userName, 0, 2)); // استخراج أول حرفين وتحويلهما إلى أحرف كبيرة
                            @endphp

                            <button
                                class="inline-flex items-center m-auto justify-center text-sm border-2 border-transparent rounded-full h-8 w-8 bg-gray-300 text-white font-bold focus:outline-none focus:border-gray-300 transition">
                                {{ $initials }}
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-app.dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-app.dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-app.dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-app.dropdown-link>
                            </form>
                        </x-slot>
                    </x-app.dropdown>
                @endguest
            <div class="mr-2 flex items-center">
                <a href="{{ route('home') }}">
                    <x-app.application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                </a>
            </div>
        </div>


    </div>


</header>
