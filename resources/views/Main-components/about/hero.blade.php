
<!-- ========================================== -->
    <!-- HERO SECTION (Pinned Scroll Reveal) -->
    <!-- ========================================== -->
    <section id="hero-section" class="relative flex flex-col items-center justify-center w-full min-h-screen px-6 overflow-hidden border-b lg:px-20 bg-bg-soft border-border-light">
        <div class="relative z-10 flex flex-col items-center w-full h-full gap-8 py-20 lg:flex-row lg:justify-between lg:py-0">
            
            <!-- Left Text -->
            <div id="hero-text-1" class="z-20 w-full text-center lg:w-1/3 lg:text-left">
                <h1 class="font-serif text-4xl font-bold leading-tight sm:text-5xl md:text-6xl xl:text-7xl text-text-primary">
                    Up to <span class="text-brand">70% of Nitrogen</span>
                    <br class="hidden sm:block"> is lost in the soil
                </h1>
                <p class="max-w-md mx-auto mt-6 font-serif text-base sm:text-lg text-text-secondary lg:mx-0">
                    Inefficient nitrogen absorption leads to nutrient loss, increased costs, and environmental damage.
                </p>
            </div>

            <!-- Center Plant Graphic -->
            <div id="plant-container" class="relative flex items-end justify-center w-full lg:w-1/3 h-[40vh] sm:h-[50vh] lg:h-[75vh] pointer-events-none z-10 my-10 lg:my-0">
                <div class="relative w-full h-full max-w-md">
                    <!-- Outline -->
                    <img src="{{asset('assets/img/about/2.png')}}" 
                        alt="Corn Outline" 
                        class="absolute bottom-0 object-contain w-full h-full opacity-20" />
                    <!-- Filled (Hidden initially by clip-path in GSAP) -->
                    <img id="corn-fill-crop" 
                        src="{{asset('assets/img/about/1.png')}}" 
                        alt="Corn Filled" 
                        class="absolute bottom-0 object-contain w-full h-full"
                        style="clip-path: inset(100% 0% 0% 0%);" />
                </div>
            </div>

            <!-- Right Text (Hidden initially) -->
            <div id="hero-text-2" class="absolute left-0 z-20 w-full px-6 font-serif text-center transform translate-y-10 opacity-0 lg:w-1/3 lg:text-right lg:relative lg:translate-y-0 lg:left-auto top-1/2 lg:top-auto lg:-translate-y-0 lg:px-0">
                   
                <h1 class="font-serif text-4xl font-bold leading-tight text-brand sm:text-5xl md:text-6xl xl:text-7xl text-text-primary">
                    Before Crops
                    <br class="hidden sm:block "> Can Use It
                </h1>
                <p class="max-w-md mx-auto mt-6 font-serif text-base sm:text-lg text-text-secondary lg:ml-auto lg:mr-0">
                    The result? Reduced yields and unnecessary fertilizer waste. We set out to fix the broken system.
                </p>
            </div>

        </div>
    </section>















