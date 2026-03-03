


<!-- ========================================== -->
<!-- SECTION : OUR  TEAM -->
<!-- ========================================== -->

<section class="relative px-6 py-24 overflow-hidden lg:px-10 bg-soft"
 style="clip-path: polygon(0% 0%, 100% -0%, 100% 100%, 0% 100%);">

    <div class="mx-auto max-w-7xl">

        {{-- ===== HEADER ===== --}}
        <div class="relative z-10 flex flex-col items-center mb-24 text-center gsap-fade-up">
            <h2
                class="absolute z-0 hidden font-serif text-6xl font-bold text-center text-gray-100 -translate-x-1/2 pointer-events-none select-none lg:right-0 left-1/2 lg:left-0 lg:translate-x-0 -top-6 md:-top-12 sm:text-7xl md:text-8xl lg:text-9xl opacity-60 lg:block">
                Abhay
            </h2>
            <div class="flex items-center gap-2 opacity-0 md:gap-4 scroll-animate" data-animation="animate__flipInX">
                <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon"
                    class="relative object-contain h-12 md:h-28 left-2 md:left-14">

                <span class="font-serif text-lg font-bold tracking-wide uppercase md:text-2xl text-brand-dark">
                    Our Values
                </span>

                <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon"
                    class="relative object-contain h-12 rotate-180 md:h-28 right-2 md:right-14">
            </div>

            <h2 class="mt-2 font-serif text-4xl font-bold leading-tight text-gray-900 md:text-5xl lg:text-6xl lg:mt-0">
                Our <span class="italic text-brand">Values & Beliefs</span>
            </h2>
        </div>


        {{-- ===== VALUES GRID ===== --}}
        <div class="grid grid-cols-1 gap-14 md:grid-cols-2 lg:grid-cols-2">

            {{-- VALUE ITEM --}}
            @php
            $values = [
            [
            "number" => "01",
            "title" => "Service",
            "desc" => "Providing best solutions tailored to customer needs for lasting satisfaction."
            ],
            [
            "number" => "02",
            "title" => "Integrity",
            "desc" => "Respect for customers, employees, society, and the environment."
            ],
            [
            "number" => "03",
            "title" => "Quality",
            "desc" => "Delivering superior products that ensure performance and reliability."
            ],
            [
            "number" => "04",
            "title" => "Guideline",
            "desc" => "Win–Win strategy in every partnership and business transaction."
            ],
            ];
            @endphp

            @foreach($values as $value)
            <div class="flex items-start gap-8 group">

                {{-- ICON BOX --}}
                <div class="relative flex-shrink-0">
                    <div
                        class="flex items-center justify-center transition duration-300 border w-28 h-28 rounded-2xl border-light bg-soft shadow-soft group-hover:shadow-medium">

                        {{-- Simple Icon Placeholder --}}
                        <svg class="w-10 h-10 text-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6l4 2" />
                        </svg>
                    </div>

                    {{-- Number Badge --}}
                    <div
                        class="absolute flex items-center justify-center w-12 h-12 font-bold text-white -translate-y-1/2 rounded-full -right-4 top-1/2 bg-brand shadow-medium">
                        {{ $value['number'] }}
                    </div>
                </div>

                {{-- CONTENT --}}
                <div>
                    <h3 class="mb-3 text-xl font-bold text-primary">
                        {{ $value['title'] }}
                    </h3>
                    <p class="leading-relaxed text-secondary">
                        {{ $value['desc'] }}
                    </p>
                </div>

            </div>
            @endforeach

        </div>

    </div>

</section>



<!-- ========================================== -->
<!-- SECTION 3: OUR CORE VALUES & TEAM -->
<!-- ========================================== -->
<section class="relative px-6 py-24 overflow-hidden bg-bg-white lg:px-10">
    {{-- Background --}}
    <div class="absolute inset-0">
        <img src="{{ asset('assets/img/about/back-3.jpg') }}" class="object-cover w-full h-full opacity-10" alt="">
    </div>

    <div class="mx-auto ">

        <!-- UPDATED HEADING STYLE -->
        <div class="relative z-10 flex flex-col items-center mb-24 text-center gsap-fade-up">
            <h2
                class="absolute z-0 hidden font-serif text-6xl font-bold text-center text-gray-100 -translate-x-1/2 pointer-events-none select-none lg:right-0 left-1/2 lg:left-0 lg:translate-x-0 -top-6 md:-top-12 sm:text-7xl md:text-8xl lg:text-9xl opacity-60 lg:block">
                Abhay
            </h2>
            <div class="flex items-center gap-2 opacity-0 md:gap-4 scroll-animate" data-animation="animate__flipInX">
                <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon"
                    class="relative object-contain h-12 md:h-28 left-2 md:left-14">

                <span class="font-serif text-lg font-bold tracking-wide uppercase md:text-2xl text-brand-dark">
                    Our People
                </span>

                <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon"
                    class="relative object-contain h-12 rotate-180 md:h-28 right-2 md:right-14">
            </div>

            <h2 class="mt-2 font-serif text-4xl font-bold leading-tight text-gray-900 md:text-5xl lg:text-6xl lg:mt-0">
                Team <span class="italic text-brand">Members</span>
            </h2>
        </div>


        <!-- Team Grid -->
        <div class="grid grid-cols-1 gap-12 mt-16 md:grid-cols-3 lg:gap-16">
            <!-- Team Member 1 -->
            <div class="flex flex-col items-center gsap-fade-up group">
                <div
                    class="w-48 h-48 mb-6 overflow-hidden transition-colors duration-300 border-4 rounded-full border-brand/10 group-hover:border-brand">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=600"
                        alt="Dr. Anya Sharma"
                        class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105" />
                </div>
                <h3 class="font-serif text-xl font-bold text-text-primary">Dr. Anya Sharma</h3>
                <p class="mt-1 mb-3 text-sm font-semibold text-brand">Lead Agronomist</p>
                <p class="text-text-secondary text-sm max-w-[250px] leading-relaxed mb-4">Driving innovation in plant
                    nutrient absorption and cellular delivery mechanisms.</p>
                <div class="flex gap-4 text-brand opacity-80">
                    <a href="#" class="transition-colors hover:text-brand-dark"><svg class="w-4 h-4" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg></a>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="flex flex-col items-center gsap-fade-up group" style="transition-delay: 100ms;">
                <div
                    class="w-48 h-48 mb-6 overflow-hidden transition-colors duration-300 border-4 rounded-full border-brand/10 group-hover:border-brand">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=600"
                        alt="Prof. Ben Carter"
                        class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105" />
                </div>
                <h3 class="font-serif text-xl font-bold text-text-primary">Prof. Ben Carter</h3>
                <p class="mt-1 mb-3 text-sm font-semibold text-brand">Head of Science</p>
                <p class="text-text-secondary text-sm max-w-[250px] leading-relaxed mb-4">Pioneering the
                    precision-engineered carbon capsule technology behind Abhay.</p>
                <div class="flex gap-4 text-brand opacity-80">
                    <a href="#" class="transition-colors hover:text-brand-dark"><svg class="w-4 h-4" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg></a>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="flex flex-col items-center gsap-fade-up group" style="transition-delay: 200ms;">
                <div
                    class="w-48 h-48 mb-6 overflow-hidden transition-colors duration-300 border-4 rounded-full border-brand/10 group-hover:border-brand">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=600"
                        alt="Maria Rodriguez"
                        class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105" />
                </div>
                <h3 class="font-serif text-xl font-bold text-text-primary">Maria Rodriguez</h3>
                <p class="mt-1 mb-3 text-sm font-semibold text-brand">Director of Operations</p>
                <p class="text-text-secondary text-sm max-w-[250px] leading-relaxed mb-4">Ensuring strict safety
                    standards and global zero-emission manufacturing.</p>
                <div class="flex gap-4 text-brand opacity-80">
                    <a href="#" class="transition-colors hover:text-brand-dark"><svg class="w-4 h-4" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg></a>
                </div>
            </div>
        </div>

    </div>
</section>
