@php
$timelineEvents = [

[
"year" => "2015",
"title" => "Research Lab Established",
"desc" => "Milestone crossed: 100+ proven products. We inaugurated our state-of-the-art R&D lab dedicated to Indian soil
analysis."
],
[
"year" => "2020",
"title" => "COVID-19 Resilience",
"desc" => "\"We Never Stopped. Farmers Never Stop.\" Amidst global challenges, our supply chains stood firm, ensuring
the kisan never lacked essential agricultural inputs."
],
[
"year" => "2024",
"title" => "National Distribution",
"desc" => "Present day. Serving over 50,000+ farmers across 12 states with unwavering commitment to quality and
prosperity."
]
];


@endphp
<!-- ========================================== -->
<!-- SECTION 1: ROOTS OF SUSTAINABLE FUTURE -->
<!-- ========================================== -->
<section class="relative px-6 overflow-hidden py-28 lg:px-10">

    {{-- Background --}}
    <div class="absolute inset-0">
        <img src="{{ asset('assets/img/about/back-2.jpg') }}" class="object-cover w-full h-full opacity-75" alt="">
    </div>

    <div class="relative z-10 mx-auto ">

        {{-- ===== HEADER ===== --}}
        <div class="relative z-10 flex flex-col items-center mb-24 text-center gsap-fade-up">
            <h2
                class="absolute z-0 hidden font-serif text-6xl font-bold text-center text-gray-100 -translate-x-1/2 pointer-events-none select-none lg:right-0 left-1/2 lg:left-0 lg:translate-x-0 -top-6 md:-top-12 sm:text-7xl md:text-8xl lg:text-9xl opacity-60 lg:block">
                Abhay
            </h2>
            <div class="relative z-10 flex flex-col items-center mt-4 text-center md:mt-0">

                <div class="flex items-center gap-2 opacity-0 md:gap-4 scroll-animate"
                    data-animation="animate__flipInX">
                    <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon"
                        class="relative object-contain h-12 md:h-28 left-2 md:left-14">

                    <span class="text-lg font-bold tracking-wide uppercase md:text-2xl text-brand-dark">
                        Our Story
                    </span>

                    <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon"
                        class="relative object-contain h-12 rotate-180 md:h-28 right-2 md:right-14">
                </div>


            </div>

            <h2 class="mt-2 font-serif text-4xl font-bold leading-tight text-gray-900 md:text-5xl lg:text-6xl lg:mt-0">
                Roots of <span class="italic text-brand">Sustainable Future</span>
            </h2>

            <p class="mt-6 text-lg leading-relaxed text-text-secondary md:max-w-2xl md:mx-auto">
                We bridge the gap by 2050, our passion to innovate agriculture and sustain communities drives our
                mission every day.
            </p>
        </div>


        {{-- ===== GRID ===== --}}
        <div class="grid items-start gap-20 lg:grid-cols-2">

            {{-- LEFT IMAGE BLOCK --}}
            <div>

                <div class="relative overflow-hidden border rounded-3xl shadow-medium border-light">
                    <img src=""
                        class="w-full h-[450px] object-cover transition duration-700 hover:scale-105" alt="">
                </div>

                <div class="flex gap-4 mt-10">
                    <div
                        class="flex items-center justify-center rounded-full w-14 h-14 bg-brand/10 text-brand shrink-0 shadow-soft">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-primary">Our Humble Beginnings</h3>
                        <p class="mt-2 leading-relaxed text-secondary">
                            From a small rural farm to a nationwide agricultural movement,
                            our journey began with a single mission — empowering farmers.
                        </p>
                    </div>
                </div>

            </div>


            {{-- RIGHT TIMELINE --}}
            <div class="relative">

                {{-- Center Line --}}
                <div class="absolute left-4 md:left-1/2 md:-translate-x-1/2
                    h-full w-[3px] bg-brand/20 rounded-full">
                </div>

                @foreach($timelineEvents as $index => $event)
                <div class="relative flex items-start mb-16
                    {{ $index % 2 === 0 ? 'md:flex-row-reverse' : '' }}">


                    {{-- lottie grow --}}
                    <div
                        class="absolute top-0 scale-x-50 rotate-180 grow opacity-30 lg:opacity-100 lg:scale-100 lg:right-12 -right-48">
                    </div>

                    {{-- Card --}}
                    <div class="relative ml-12 overflow-hidden md:ml-0 md:w-3/4">
                        <div
                            class="p-6 transition duration-300 bg-white border rounded-2xl shadow-soft border-light hover:shadow-medium">

                            <span
                                class="inline-block px-3 py-1 mb-3 text-xs font-semibold tracking-widest uppercase rounded-full bg-brand/10 text-brand">
                                {{ $event['year'] }}
                            </span>

                            <h3 class="mb-2 text-xl font-bold text-primary">
                                {{ $event['title'] }}
                            </h3>

                            <p class="text-sm leading-relaxed text-secondary">
                                {{ $event['desc'] }}
                            </p>

                        </div>
                    </div>

                </div>
                @endforeach

            </div>

        </div>

    </div>
</section>


