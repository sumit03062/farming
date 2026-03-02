@php
$products = [
[
'name' => 'Lamdaking',
'image' => 'assets/img/product/product-1.webp',
'description' => 'Advanced insecticide solution for maximum crop protection and high yield farming.',
'slug' => 'lamdaking'
],
[
'name' => 'Bio Defender',
'image' => 'assets/img/product/product-2.webp',
'description' => 'Eco-friendly crop protection formula that keeps soil healthy and productive.',
'slug' => 'bio-defender'
],
[
'name' => 'Crop Shield',
'image' => 'assets/img/product/product-3.webp',
'description' => 'Scientifically developed pesticide ensuring long-lasting plant safety.',
'slug' => 'crop-shield'
],
[
'name' => 'Green Protect',
'image' => 'assets/img/product/product-1.webp',
'description' => 'Broad-spectrum protection against common agricultural pests.',
'slug' => 'green-protect'
],
[
'name' => 'Soil Boost',
'image' => 'assets/img/product/product-2.webp',
'description' => 'Enhances soil fertility and promotes healthy root development.',
'slug' => 'soil-boost'
],
[
'name' => 'Fungi Clear',
'image' => 'assets/img/product/product-3.webp',
'description' => 'Effective fungicide designed to prevent crop diseases.',
'slug' => 'fungi-clear'
],
[
'name' => 'Weed Guard',
'image' => 'assets/img/product/product-2.webp',
'description' => 'Reliable herbicide for long-lasting weed control.',
'slug' => 'weed-guard'
],
[
'name' => 'Growth Max',
'image' => 'assets/img/product/product-1.webp',
'description' => 'Plant growth enhancer for improved crop strength and yield.',
'slug' => 'growth-max'
],
];
@endphp



<section class="relative z-10 py-12 overflow-hidden md:py-20 bg-light lg:overflow-visible">

    <div class="container px-4 mx-auto sm:px-6">

        <div class="relative text-center reveal-text">

            <h2
                class="absolute z-0 hidden font-serif text-6xl font-bold text-gray-100 -translate-x-1/2 pointer-events-none select-none left-1/2 lg:left-0 lg:translate-x-0 -top-6 md:-top-12 sm:text-7xl md:text-8xl lg:text-9xl opacity-60 lg:right-0 lg:block">
                Abhay
            </h2>

            <div class="relative z-10 flex flex-col items-center mt-4 text-center md:mt-0">

                <div class="flex items-center gap-2 opacity-0 md:gap-4 scroll-animate"
                    data-animation="animate__flipInX">
                    <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon"
                        class="relative object-contain h-12 md:h-28 left-2 md:left-14">

                    <span class="text-lg font-bold tracking-wide uppercase md:text-2xl text-brand-dark">
                        Our Collection
                    </span>

                    <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon"
                        class="relative object-contain h-12 rotate-180 md:h-28 right-2 md:right-14">
                </div>

                <h2
                    class="mt-2 font-serif text-4xl font-bold text-center text-gray-900 md:mt-0 md:text-5xl lg:text-6xl">
                    Our <span class="italic text-emerald-600">Products</span>
                </h2>

                <p
                    class="max-w-2xl mx-auto mt-4 mb-10 text-base leading-relaxed text-center text-gray-600 md:mt-6 md:mb-16 md:text-lg">
                    Our products are formulated to provide protection against a wide range of pests and diseases.
                </p>

            </div>


            <div class="grid grid-cols-1 gap-6 md:gap-10 md:grid-cols-2 lg:grid-cols-4">

                @foreach ($products as $product)
                <div class="relative flex flex-col p-1 overflow-hidden group rounded-2xl">

                    <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition duration-300
                   bg-[conic-gradient(from_0deg,transparent,theme(colors.emerald.500),theme(colors.emerald.400),transparent_40%)]
                   animate-spin-slow pointer-events-none">
                    </div>

                    <div
                        class="relative flex flex-col h-full min-h-[26rem] md:min-h-[28rem] p-3 transition-all duration-300 bg-white shadow-sm rounded-2xl group-hover:shadow-2xl">

                        <div>
                            <img src="{{ asset($product['image']) }}"
                                class="object-contain mx-auto transition-transform duration-500 group-hover:scale-105 rounded-3xl"
                                alt="{{ $product['name'] }}">
                        </div>

                        <div class="px-3 mt-4 space-y-3 md:mt-6 md:space-y-4">
                            <h3 class="font-serif text-lg font-semibold text-gray-900">
                                {{ $product['name'] }}
                            </h3>

                            <p class="text-sm leading-relaxed text-gray-600">
                                {{ $product['description'] }}
                            </p>
                        </div>

                        <div class="flex justify-end p-4 mt-auto md:p-6">
                            <a href="#"
                                class="p-2 transition bg-gray-100 rounded-full group-hover:bg-emerald-600 group-hover:text-white">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>


            <div class="mt-12 text-center md:mt-16">

                <a href=""
                    class="relative inline-block px-6 py-3 overflow-hidden transition-all rounded-full md:px-8 md:py-4 shadow-soft group">

                    <span class="absolute inset-0 rounded-full bg-brand"></span>

                    <span
                        class="absolute inset-0 transition-transform duration-300 ease-out origin-left scale-x-0 rounded-full bg-brand-dark group-hover:scale-x-100">
                    </span>

                    <span class="relative z-10 text-sm font-bold tracking-wide text-white md:text-base">
                        View All
                    </span>

                </a>

            </div>


        </div>

    </div>

</section>