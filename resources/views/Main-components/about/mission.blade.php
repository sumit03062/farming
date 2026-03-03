@props([
    'missionImage' => 'assets/img/banner/banner-4.jpg',
    'visionImage'  => 'assets/img/vision.png',
])

<section class="relative py-12 overflow-hidden bg-soft mission-section lg:py-20">

    <div class="max-w-6xl px-4 mx-auto space-y-20 sm:px-6 ">

         <div class="relative text-center lg:text-left reveal-text">

            <h2 class="absolute z-0 hidden font-serif text-6xl font-bold text-center text-gray-100 -translate-x-1/2 pointer-events-none select-none lg:right-0 left-1/2 lg:left-0 lg:translate-x-0 -top-6 md:-top-12 sm:text-7xl md:text-8xl lg:text-9xl opacity-60 lg:block">
                Abhay
            </h2>

            <div class="relative z-10 flex flex-col items-center mt-4 text-center md:mt-0">

                <div class="flex items-center gap-2 opacity-0 md:gap-4 scroll-animate" data-animation="animate__flipInX">
                    <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon" class="relative object-contain h-12 md:h-28 left-2 md:left-14">

                    <span class="font-serif text-lg font-bold tracking-wide uppercase md:text-2xl text-brand-dark">
                        Mission & Vision
                    </span>

                    <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon" class="relative object-contain h-12 rotate-180 md:h-28 right-2 md:right-14">
                </div>

                <h2 class="mt-2 font-serif text-4xl font-bold text-gray-900 md:font-bold md:mt-0 md:text-5xl lg:text-6xl">
                    Our Green <span class="italic text-emerald-600">Mission</span>
                </h2>

            </div>

        </div>

        <div class="relative flex flex-col items-center md:flex-row mission-block">

            <div class="w-full p-3 overflow-hidden bg-white md:p-5 md:w-2/3 rounded-3xl">
                <img src="{{ asset($missionImage) }}"
                     alt="Mission"
                     class="w-full h-[300px] md:h-[450px] object-cover transition duration-700 mission-image rounded-3xl">
            </div>

            <div class="relative md:absolute w-[90%] sm:w-[80%] md:w-1/2 p-6 md:p-12 -mt-12 md:mt-0 z-10 md:right-0 bg-white border border-gray-100 shadow-2xl rounded-3xl mission-card">

                <div class="flex items-center gap-2 mb-2 opacity-0 md:gap-4 md:mb-4 scroll-animate" data-animation="animate__flipInX">
                    <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon" class="relative object-contain h-10 md:h-28 left-2 md:left-10">

                    <span class="text-[10px] md:text-xs font-bold tracking-[0.2em] uppercase text-emerald-600">
                        Our Commitment
                    </span>

                    <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon" class="relative object-contain h-10 rotate-180 md:h-28 right-2 md:right-10">
                </div>

                <h2 class="mt-2 font-serif text-3xl font-bold text-gray-900 md:mt-3 md:text-4xl lg:text-5xl">
                    Our <span class="italic text-emerald-600">Mission</span>
                </h2>

                <p class="mt-4 text-base leading-relaxed text-gray-600 md:mt-6 md:text-lg">
                    To empower farmers with sustainable and innovative agricultural solutions that enhance productivity while preserving the natural ecosystem for future generations.
                </p>

            </div>

        </div>

        <div class="relative flex flex-col items-center mt-24 md:justify-end md:flex-row vision-block md:mt-0">

            <div class="w-full p-3 overflow-hidden bg-white md:p-5 md:w-2/3 rounded-3xl">
                <img src="{{ asset($visionImage) }}"
                     alt="Vision"
                     class="w-full h-[300px] md:h-[450px] object-cover transition duration-700 vision-image rounded-3xl">
            </div>

            <div class="relative md:absolute w-[90%] sm:w-[80%] md:w-1/2 p-6 md:p-12 -mt-12 md:mt-0 z-10 md:left-0 bg-white border border-gray-100 shadow-2xl rounded-3xl vision-card">

                <div class="flex items-center gap-2 mb-2 opacity-0 md:gap-4 md:mb-4 scroll-animate" data-animation="animate__flipInX">
                    <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon" class="relative object-contain h-10 md:h-28 left-2 md:left-10">
                
                    <span class="text-[10px] md:text-xs font-bold tracking-[0.2em] uppercase text-emerald-600">
                        Our Future
                    </span>
                
                    <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon" class="relative object-contain h-10 rotate-180 md:h-28 right-2 md:right-10">
                </div>

                <h2 class="mt-2 font-serif text-3xl font-bold text-gray-900 md:mt-3 md:text-4xl lg:text-5xl">
                    Our <span class="italic text-emerald-600">Vision</span>
                </h2>

                <p class="mt-4 text-base leading-relaxed text-gray-600 md:mt-6 md:text-lg">
                    To be the most trusted global partner in agricultural excellence, recognized for our commitment to quality, integrity, and farmer prosperity.
                </p>

            </div>

        </div>

    </div>

</section>



<section class="relative py-24 overflow-hidden text-white bg-brand-dark"  
 style="clip-path: polygon(0 10%, 100% -10%, 100% 100%, 0% 100%);">
     <!-- Sloped Background -->

    
    <div class="px-6 mx-auto max-w-7xl lg:px-8">

        <!-- Header -->
        <div class="flex flex-col mb-16 lg:flex-row lg:items-center lg:justify-between">
            <div>
                <p class="mb-4 text-sm font-semibold tracking-widest text-yellow-400">
                    OUR SOLUTIONS
                </p>

                <h2 class="max-w-3xl font-serif text-4xl leading-tight md:text-5xl lg:text-6xl">
                    Precision Chemistry for <br class="hidden md:block">
                    Maximum Yield
                </h2>
            </div>

            <div class="mt-8 lg:mt-0">
                <a href="#"
                   class="inline-flex items-center px-6 py-3 border border-white/40 rounded-full text-sm font-medium hover:bg-white hover:text-[#1F4D36] transition">
                    View All Products
                </a>
            </div>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">

            <!-- Card 1 -->
            <div class="bg-[#295E45] rounded-3xl p-8 hover:scale-[1.02] transition duration-300">
                <div class="flex items-center justify-center mb-6 rounded-full w-14 h-14 bg-yellow-500/20">
                    <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path d="M12 9v2m0 4h.01M5.07 19H18.93a2 2 0 001.74-3l-6.93-12a2 2 0 00-3.48 0l-6.93 12a2 2 0 001.74 3z"/>
                    </svg>
                </div>

                <h3 class="mb-4 text-xl font-semibold">Crop Protection</h3>

                <p class="mb-6 leading-relaxed text-white/80">
                    Advanced fungicides and insecticides designed to target specific Indian pests
                    with minimal environmental footprint.
                </p>

                <a href="#" class="inline-flex items-center gap-2 text-sm font-medium text-yellow-400 transition-all hover:gap-3">
                    Learn more
                    <span>→</span>
                </a>
            </div>

            <!-- Card 2 -->
            <div class="bg-[#295E45] rounded-3xl p-8 hover:scale-[1.02] transition duration-300">
                <div class="flex items-center justify-center mb-6 rounded-full w-14 h-14 bg-yellow-500/20">
                    <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path d="M12 2C8 6 6 9 6 12a6 6 0 0012 0c0-3-2-6-6-10z"/>
                    </svg>
                </div>

                <h3 class="mb-4 text-xl font-semibold">Plant Nutrition</h3>

                <p class="mb-6 leading-relaxed text-white/80">
                    Bio-stimulants and micronutrients that fortify crops from within,
                    ensuring robust growth in varied climatic zones.
                </p>

                <a href="#" class="inline-flex items-center gap-2 text-sm font-medium text-yellow-400 transition-all hover:gap-3">
                    Learn more
                    <span>→</span>
                </a>
            </div>

            <!-- Card 3 -->
            <div class="bg-[#295E45] rounded-3xl p-8 hover:scale-[1.02] transition duration-300">
                <div class="flex items-center justify-center mb-6 rounded-full w-14 h-14 bg-yellow-500/20">
                    <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path d="M20 12H4"/>
                        <path d="M12 4v16"/>
                    </svg>
                </div>

                <h3 class="mb-4 text-xl font-semibold">Soil Enhancers</h3>

                <p class="mb-6 leading-relaxed text-white/80">
                    Innovative conditioners that restore soil vitality,
                    improving water retention and microbial health over time.
                </p>

                <a href="#" class="inline-flex items-center gap-2 text-sm font-medium text-yellow-400 transition-all hover:gap-3">
                    Learn more
                    <span>→</span>
                </a>
            </div>

        </div>

    </div>
</section>