<section class="relative min-h-[60vh] flex items-center overflow-hidden py-12 px-4 sm:px-6 lg:px-8 bg-[#f8faf7]">

    <div class="absolute top-0 right-0 h-full rounded-l-full bg-brand/5 blur-3xl -z-10"></div>

    <div class="w-full mx-auto ">
        <div
            class="relative bg-white/70 backdrop-blur-xl border border-white shadow-2xl rounded-[2rem] lg:rounded-[4rem] overflow-hidden grid lg:grid-cols-2 items-stretch">

            <div class="relative min-h-[300px] lg:min-h-[500px] overflow-hidden">
                <img src="{{ asset('assets/img/about-3.jpg') }}" alt="Farmer in Field"
                    class="absolute inset-0 object-cover w-full h-full guide-img">
                <div class="absolute inset-0 bg-gradient-to-r from-black/20 to-transparent"></div>

                <div
                    class="absolute p-4 shadow-xl bottom-8 left-8 bg-white/90 backdrop-blur-md rounded-2xl floating-element">
                    <div class="flex items-center gap-3">
                        <div class="flex items-center justify-center w-10 h-10 text-white rounded-full bg-brand-lime">
                            <span class="font-serif text-sm material-icons">verified</span>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase tracking-wider font-bold text-gray-500">Expert Verified</p>
                            <p class="text-sm font-bold text-brand">2026 Updated</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative flex flex-col justify-center p-8 lg:p-16">
                <img src="{{ asset('assets/img/icon-1.png') }}"
                    class="absolute w-16 top-10 right-10 opacity-10 leaf-rotate" alt="">

                <div class="guide-content">
                    <h1 class="mb-6 font-serif text-4xl font-extrabold leading-tight lg:text-6xl text-primary">
                        Products & Usage <br>
                        <span class="text-brand-lime">Guide</span>
                    </h1>

                    <div class="mb-8 space-y-4">
                        <p class="font-serif text-xl leading-relaxed text-secondary">
                            Complete spray guidance for Indian farmers.
                        </p>
                        <p class="pl-4 text-2xl font-bold border-l-4 text-brand-dark hindi-text border-brand-lime">
                            सही मात्रा, सही समय और सही फसल के लिए पूरी जानकारी।
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="#explore"
                            class="px-8 py-4 font-bold text-white transition-all rounded-full shadow-lg bg-brand hover:bg-brand-dark hover:shadow-brand/30">
                            Download Guide
                        </a>
                        <div class="flex items-center gap-4 px-6 py-4 bg-gray-100 rounded-full">
                            <span class="flex -space-x-3">
                                <div class="w-8 h-8 bg-gray-300 border-2 border-white rounded-full"></div>
                                <div class="w-8 h-8 bg-gray-400 border-2 border-white rounded-full"></div>
                            </span>
                            <p class="text-xs font-bold text-gray-600">Joined by 10k+ Farmers</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

