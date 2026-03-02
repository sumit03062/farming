<nav x-data="{ open: false }" 
     @click.away="open = false"
     class="fixed left-0 right-0 z-50 px-4 py-4 md:px-10 lg:px-20">
    
    <div class="flex items-center justify-between mx-auto ">
        
        <div class="flex items-center flex-shrink-0">
            <a href="{{ route('home') }}" class="relative flex items-center">
                <img src="{{ asset('assets/img/logo-3.png') }}" 
                     class="w-16 h-16 transition-all duration-500 md:w-24 md:h-24 lg:w-32 lg:h-32 logo-img" 
                     alt="Logo">
            </a>
        </div>

        <div class="hidden md:flex items-center bg-white/80 backdrop-blur-md border border-gray-100 rounded-full px-2 py-1.5 shadow-sm">
            <ul class="flex items-center gap-1">
                <li>
                    <a href="{{ route('home') }}"
                        class="px-4 lg:px-5 py-2 text-sm font-medium transition rounded-full 
                       {{ request()->routeIs('home') ? 'bg-brand text-white' : 'text-gray-600 hover:text-black' }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="px-4 lg:px-5 py-2 text-sm font-medium transition rounded-full 
                       {{ request()->is('about') ? 'bg-brand text-white' : 'text-gray-600 hover:text-black' }}">
                        About
                    </a>
                </li>

                
                 <li>
                    <a href="{{ route('products') }}"
                        class="px-4 lg:px-5 py-2 text-sm font-medium transition rounded-full 
                       {{ request()->is('products') ? 'bg-brand text-white' : 'text-gray-600 hover:text-black' }}">
                        Products
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}"
                        class="px-4 lg:px-5 py-2 text-sm font-medium transition rounded-full 
                       {{ request()->is('contact') ? 'bg-brand text-white' : 'text-gray-600 hover:text-black' }}">
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>

        <div class="flex items-center gap-2 lg:gap-3">
            @auth
                <div class="hidden text-right xl:block">
                    <p class="text-xs font-bold text-primary">{{ Auth::user()->name }}</p>
                    <p class="text-[10px] text-gray-400">{{ Auth::user()->email }}</p>
                </div>

                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="w-10 h-10 overflow-hidden transition bg-gray-100 border-2 border-white rounded-full shadow-sm hover:border-brand">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=10b981&color=fff" alt="User">
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">Profile</x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                Log Out
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            @else
                <a href="/quote" class="relative hidden px-4 py-2 overflow-hidden transition-all rounded-full shadow-md sm:inline-block lg:px-6 group">
                    <span class="absolute inset-0 rounded-full bg-brand"></span>
                    <span class="absolute inset-0 transition-transform duration-300 ease-out origin-left scale-x-0 rounded-full bg-black/20 group-hover:scale-x-100"></span>
                    <span class="relative z-10 flex items-center gap-2 text-xs font-bold text-white lg:text-sm">
                        Get A Quote
                    </span>
                </a>
            @endauth

            <div class="flex items-center px-4 md:hidden">
                <button @click="open = ! open"
                        class="p-2 text-gray-600 transition bg-white rounded-full shadow-sm hover:text-brand focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="open" 
         x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 translate-y-[-10px]" 
         x-transition:enter-end="opacity-100 translate-y-0"
         class="absolute overflow-hidden bg-white border border-gray-100 shadow-xl left-4 right-4 top-24 rounded-2xl md:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">Home</x-responsive-nav-link>
            <x-responsive-nav-link href="/about-us" :active="request()->is('about-us*')">About Us</x-responsive-nav-link>
            <x-responsive-nav-link href="/products/zinc" :active="request()->is('products*')">Products</x-responsive-nav-link>
            <x-responsive-nav-link href="/contact-us" :active="request()->is('contact-us*')">Contact Us</x-responsive-nav-link>

            <div class="px-4 py-3 border-t border-gray-100">
                <a href="#contact" class="block w-full py-3 text-sm font-bold text-center text-white transition rounded-xl bg-brand hover:opacity-90">
                    Get A Quote
                </a>
            </div>
        </div>
    </div>
</nav>