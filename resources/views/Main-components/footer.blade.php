@props([
'company' => 'Abahy',
'tagline' => 'Advanced chemical solutions for modern farming.',
])

<footer class="relative hidden pt-12 md:overflow-hidden md:pt-20 sm:block">

    <div class="relative inset-0 hidden w-full max-h-screen pointer-events-none ft-bg sm:block"></div>

    <!-- ================= CTA SECTION ================= -->
    <div class="absolute top-0 left-0 right-0 sm:top-8 lg:top-36">

        <div class="max-w-full mx-auto md:max-w-4xl lg:max-w-7xl">
            <div
                class="relative flex flex-col items-center justify-between gap-1 p-4 bg-white shadow-2xl sm:p-8 md:gap-6 rounded-3xl md:flex-row lg:p-16">

                <div class="absolute top-0 left-0 opacity-55">
                    <img src="{{asset('assets/img/icon-3.png')}}" alt="" class="h-16 sm:w-32 lg:w-48">
                </div>
                <h2 class="font-bold text-center text-l text-brand lg:text-5xl md:text-right">
                    Your Organic <br> Journey Begins Now
                </h2>

                <div
                    class="flex items-center md:w-full p-1 bg-brand-dark rounded-full md:min-w-[280px] max-w-md  min-w-52">
                    <input type="email" placeholder="Email"
                        class="w-full px-6 py-3 text-white bg-transparent border-none focus:ring-0 placeholder:text-gray-400">
                    <button
                        class="px-6 py-3 font-semibold transition-all duration-300 bg-white rounded-full text-primary hover:bg-brand-yellow hover:scale-105">
                        Subscribe
                    </button>
                </div>

            </div>
        </div>
    </div>

    <!-- ================= Logo ================= -->
    <div
        class="absolute lg:top-[32rem]  lg:max-w-80 flex flex-col items-center justify-center lg:left-12 max-w-56 top-80 left-4">
        <img src="{{asset('assets/img/logo-3.png')}}" alt="Orgaanic"
            class="transition-all duration-700 translate-y-12 opacity-0 lg:mb-6 footer-reveal lg:h-52 h-28">
        <p class="text-sm font-bold leading-relaxed text-center text-white">
            Orgaanic is dedicated to bringing you pure, chemical-free rice grown through sustainable
            practices.
        </p>
    </div>


    <!-- SOCIAL -->
    <div class="mt-16 absolute lg:top-[32rem]  lg:max-w-96 items-center lg:right-8 max-w-56 top-80 right-4 ">

        <h3 class="text-xl font-bold text-center text-white lg:mb-6 ">Follow Us</h3>

        <div class="flex items-center justify-center transition-all duration-700 footer-reveal">
            <a href="#"
                class="text-white transition-all duration-300 rounded-full hover:bg-brand-yellow hover:scale-110">
                <img src="{{ asset('assets/img/social/app.png') }}" alt="App">
            </a>
            <a href="#"
                class="text-white transition-all duration-300 rounded-full hover:bg-brand-yellow hover:scale-110">
                <img src="{{ asset('assets/img/social/face.png') }}" alt="Facebook">
            </a>
            <a href="#"
                class="text-white transition-all duration-300 rounded-full hover:bg-brand-yellow hover:scale-110">
                <img src="{{ asset('assets/img/social/insta.png') }}" alt="Instagram">
            </a>
            <a href="#"
                class="text-white transition-all duration-300 rounded-full hover:bg-brand-yellow hover:scale-110">
                <img src="{{ asset('assets/img/social/link.png') }}" alt="LinkedIn">
            </a>
        </div>
    </div>

    <!-- ================= MAIN FOOTER ================= -->
    <div class="absolute left-0 right-0 lg:top-96 top-48">

        <div class="max-w-md px-6 mx-auto lg:px-20 lg:max-w-5xl">

            <div class="grid grid-cols-3 text-center lg:gap-12 ">

                <!-- LINKS -->
                <div class="opacity-0 scroll-animate" data-animation="animate__lightSpeedInLeft">
                    <h3 class="mb-6 text-sm font-bold text-brand-dark lg:text-3xl">Top Links</h3>
                    <ul class="space-y-3 text-sm text-gray-600 lg:text-md">
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Home
                                Page</a></li>
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Our
                                Farm</a></li>
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">About
                                Us</a></li>
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Our
                                Service</a></li>
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Contact
                                Us</a></li>
                    </ul>
                </div>

                <!-- SERVICES -->
                <div class="">
                    <h3 class="mb-6 text-sm font-bold text-brand-dark lg:text-3xl">Our Services</h3>
                    <ul class="space-y-3 text-sm text-gray-600 lg:text-md">
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Organic
                                Rice Production</a></li>
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Natural
                                Seed Cultivation</a></li>
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Farm
                                Tours</a></li>
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Eco
                                Packaging</a></li>
                    </ul>
                </div>

                <!-- PRODUCTS -->
                <div class="opacity-0 scroll-animate" data-animation="animate__lightSpeedInRight">
                    <h3 class="mb-6 text-sm font-bold lg:text-3xl text-brand-dark">Our Products</h3>
                    <ul class="space-y-3 text-sm text-gray-600 lg:text-md">
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Organic
                                Rice</a></li>
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Natural
                                Seeds</a></li>
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Bio
                                Fertilizers</a></li>
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Soil
                                Enhancers</a></li>
                    </ul>
                </div>

            </div>

        </div>
        {{-- corn --}}

        <div class="absolute left-0 flex w-full gap-6 px-6 lg:top-96 top-28">
            @for ($i = 0; $i < 10; $i++) <div class="relative w-40 h-40 lg:w-48 corn lg:h-[17rem] md:h-[22rem] opacity-30">
        </div>
        @endfor
    </div>


    <!-- BOTTOM BAR -->
    <div
        class="relative p-6 text-xs text-center text-white border-t border-yellow-300 md:flex md:justify-between lg:top-96 top-28">
        <p> © {{ date('Y') }} {{ $company }}. All rights reserved.</p>
        <p>Built With Care | Powered By Nature</p>
    </div>




</footer>



<footer class="relative block pt-12 md:overflow-hidden md:pt-20 sm:hidden">

    <!-- ================= CTA SECTION ================= -->
    <div class="absolute top-0 left-0 right-0 sm:top-8 lg:top-36">

        <div class="max-w-full mx-auto md:max-w-4xl lg:max-w-7xl">
            <div
                class="relative flex flex-col items-center justify-between gap-1 p-4 bg-white shadow-2xl sm:p-8 md:gap-6 rounded-3xl md:flex-row lg:p-12">

                <div class="absolute top-0 left-0 opacity-55">
                    <img src="{{asset('assets/img/icon-3.png')}}" alt="" class="h-16 sm:w-32 lg:w-48">
                </div>
                <h2 class="font-bold text-center text-l lg:text-3xl text-brand lg:text-5xl md:text-right">
                    Your Organic <br> Journey Begins Now
                </h2>

                <div
                    class="flex items-center md:w-full p-1 bg-brand-dark rounded-full md:min-w-[280px] max-w-md  min-w-52">
                    <input type="email" placeholder="Email"
                        class="w-full px-6 py-3 text-white bg-transparent border-none focus:ring-0 placeholder:text-gray-400">
                    <button
                        class="px-6 py-3 font-semibold transition-all duration-300 bg-white rounded-full text-primary hover:bg-brand-yellow hover:scale-105">
                        Subscribe
                    </button>
                </div>

            </div>
        </div>
    </div>

    <!-- ================= MAIN FOOTER ================= -->
    <div class="absolute left-0 right-0 lg:top-96 top-48">

        <div class="max-w-md px-6 mx-auto lg:px-20 lg:max-w-5xl">

            <div class="grid grid-cols-3 text-center lg:gap-12 ">

                <!-- LINKS -->
                <div class="opacity-0 scroll-animate" data-animation="animate__lightSpeedInLeft">
                    <h3 class="mb-6 text-sm font-bold text-brand-dark lg:text-3xl">Top Links</h3>
                    <ul class="text-sm text-gray-600 ">
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Home
                                Page</a></li>
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Our
                                Farm</a></li>
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">About
                                Us</a></li>
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Our
                                Service</a></li>
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Contact
                                Us</a></li>
                    </ul>
                </div>

                <!-- SERVICES -->
                <div class="">
                    <h3 class="mb-6 text-sm font-bold text-brand-dark lg:text-3xl">Our Services</h3>
                    <ul class="text-sm text-gray-600 ">
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Organic
                                Rice Production</a></li>
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Natural
                                Seed Cultivation</a></li>
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Farm
                                Tours</a></li>
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Eco
                                Packaging</a></li>
                    </ul>
                </div>

                <!-- PRODUCTS -->
                <div class="opacity-0 scroll-animate" data-animation="animate__lightSpeedInRight">
                    <h3 class="mb-6 text-sm font-bold lg:text-3xl text-brand-dark">Our Products</h3>
                    <ul class="text-sm text-gray-600 ">
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Organic
                                Rice</a></li>
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Natural
                                Seeds</a></li>
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Bio
                                Fertilizers</a></li>
                        <li><a href="#"
                                class="inline-block transition duration-300 hover:text-brand hover:translate-x-1">Soil
                                Enhancers</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <p class="absolute w-full max-w-md gap-6 px-6 mt-2 text-sm leading-relaxed text-center text-gray-600 ">
            Orgaanic is dedicated to bringing you pure, chemical-free rice grown through sustainable
            practices.
        </p>
        {{-- corn --}}

        <div class="absolute left-0 hidden w-full gap-6 px-6 lg:top-96 top-28">
            @for ($i = 0; $i < 10; $i++) <div class="relative w-40 h-40 lg:w-48 corn lg:h-64 md:h-[22rem] opacity-30">
        </div>
        @endfor
    </div>
    <div class="relative inset-0 w-full max-h-screen pointer-events-none ft-bg "></div>

    <!-- ================= Logo ================= -->
    <div class="absolute left-0 flex flex-col items-center justify-center max-w-36 top-60">
        <img src="{{asset('assets/img/logo-3.png')}}" alt="Orgaanic"
            class="h-20 transition-all duration-700 footer-reveal">

    </div>


    <!-- SOCIAL -->
    <div class="absolute items-center -right-1 max-w-28 top-[17rem]">

        <h3 class="text-sm font-bold text-center text-white ">Follow Us</h3>

        <div class="flex items-center justify-center px-1 transition-all duration-700 footer-reveal ">
            
            <a href="#"
                class="text-white transition-all duration-300 rounded-full hover:bg-brand-yellow hover:scale-110">
                <img src="{{ asset('assets/img/social/app.png') }}" alt="App">
            </a>
            <a href="#"
                class="text-white transition-all duration-300 rounded-full hover:bg-brand-yellow hover:scale-110">
                <img src="{{ asset('assets/img/social/face.png') }}" alt="Facebook">
            </a>
            <a href="#"
                class="text-white transition-all duration-300 rounded-full hover:bg-brand-yellow hover:scale-110">
                <img src="{{ asset('assets/img/social/insta.png') }}" alt="Instagram">
            </a>
            <a href="#"
                class="text-white transition-all duration-300 rounded-full hover:bg-brand-yellow hover:scale-110">
                <img src="{{ asset('assets/img/social/link.png') }}" alt="LinkedIn">
            </a>
        </div>
    </div>

    <div class="absolute flex justify-between px-3 text-xs text-center text-white border-t border-yellow-300 top-80">
        <p class="text-xs"> © {{ date('Y') }} {{ $company }}. All rights reserved.</p>
        <p class="text-xs">Built With Care | Powered By Nature</p>
    </div>

</footer>