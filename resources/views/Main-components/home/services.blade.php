<section class="relative py-12 overflow-hidden bg-white md:py-20">

    {{-- lottie grow: Scaled down and pushed out slightly on mobile to prevent overflow --}}
    <div class="absolute top-0 scale-x-50 rotate-180 grow -left-48 opacity-30 lg:opacity-100 lg:scale-100 lg:left-36"></div>

    {{-- lottie grow --}}
    <div class="absolute top-0 scale-x-50 rotate-180 grow opacity-30 lg:opacity-100 lg:scale-100 lg:right-36 -right-48"></div>

    <div class="px-4 mx-auto sm:px-6 max-w-7xl">
        <div class="relative text-center reveal-text">

            <h2
                class="absolute z-0 hidden font-serif text-6xl font-bold text-gray-100 -translate-x-1/2 pointer-events-none select-none left-1/2 lg:left-0 lg:translate-x-0 -top-6 md:-top-12 md:text-8xl lg:text-9xl opacity-60 lg:right-0 lg:block">
                Abhay
            </h2>

            <div class="relative z-10 flex flex-col items-center mt-4 text-center md:mt-0">

                <div class="flex items-center gap-2 opacity-0 md:gap-4 scroll-animate" data-animation="animate__flipInX">

                    <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon"
                        class="relative object-contain h-12 md:h-28 left-2 md:left-10">

                    <span class="text-sm font-bold tracking-widest uppercase md:text-xl lg:text-2xl text-brand ">
                        Our Expertise
                    </span>

                    <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon"
                        class="relative object-contain h-12 rotate-180 md:h-28 right-2 md:right-10">
                </div>

                <h2 class="mt-2 font-serif text-4xl font-bold text-center md:mt-0 md:text-5xl lg:text-6xl text-primary">
                    Our <span class="italic text-brand">Service Area</span>
                </h2>

                <p class="max-w-2xl mx-auto mt-4 mb-8 text-base leading-relaxed text-center md:mt-6 md:mb-16 md:text-lg text-secondary">
                    Comprehensive crop protection solutions tailored for modern agriculture.
                </p>
            </div>

        </div>

        @php
        $services = [
            ['title' => 'Insecticide', 'icon' => 'bug-icon.png'],
            ['title' => 'Fungicide', 'icon' => 'fungi-icon.png'],
            ['title' => 'Herbicide', 'icon' => 'weed-icon.png'],
            ['title' => 'Pesticide', 'icon' => 'pest-icon.png'],
            ['title' => 'Miticide', 'icon' => 'mite-icon.png'],
            ['title' => 'Fertilizer', 'icon' => 'leaf-icon.png'],
        ];
        @endphp

        <div class="grid grid-cols-1 gap-6 md:gap-8 md:grid-cols-2 lg:grid-cols-3">

            @foreach($services as $service)

            <div class="relative p-1 overflow-hidden group rounded-3xl">

                <div class="absolute inset-0 rounded-3xl opacity-0 group-hover:opacity-100 transition duration-300
                   bg-[conic-gradient(from_0deg,transparent,theme(colors.emerald.500),theme(colors.emerald.400),transparent_40%)]
                   animate-spin-slow pointer-events-none">
                </div>

                <div class="relative h-full p-6 transition-all duration-300 bg-white border lg:p-10 rounded-3xl border-light">

                    <div
                        class="flex items-center justify-center w-24 h-24 mx-auto mb-4 transition rounded-full lg:w-40 lg:h-40 lg:mx-0 lg:mb-6 bg-brand-light/10 text-brand group-hover:bg-brand group-hover:text-white">

                        <div class="insecticide"></div>
                    </div>

                    <h3 class="mb-2 font-serif text-xl font-bold text-center md:mb-3 lg:text-2xl text-primary lg:text-left">
                        {{ $service['title'] }}
                    </h3>

                    <p class="text-sm leading-relaxed text-center text-secondary lg:text-left">
                        Professional agricultural solutions designed to enhance crop productivity and protect your
                        fields effectively.
                    </p>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>