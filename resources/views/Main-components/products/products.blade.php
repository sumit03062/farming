@php

$categories = ["All", "Pesticides", "Herbicides", "Fungicides", "Fertilizers", "Bio Products"];

$products = [
[
"id"=>1,
"name"=>"ABHAY-GOLD",
"category"=>"Pesticides",
"cropTypes"=>["Cotton","Chilli","Tomato"],
"benefit"=>"Broad-spectrum protection against bollworms.",
"description"=>"A highly effective insecticide designed to tackle stubborn pests in commercial crops.",
"composition"=>"Emamectin Benzoate 5% SG",
"dosage"=>"100-150 gm / Acre per Spray",
"packSizes"=>["100g","250g","500g","1kg"],
"image"=>"assets/img/product/product-1.webp"
],
[
"id"=>2,
"name"=>"KISAN RAKSHA",
"category"=>"Herbicides",
"cropTypes"=>["Wheat","Barley"],
"benefit"=>"Selective weed eradication for higher yields.",
"description"=>"Post-emergent herbicide that targets Phalaris minor.",
"composition"=>"Clodinafop-propargyl 15% WP",
"dosage"=>"160 gm / Acre",
"packSizes"=>["160g","800g"],
"image"=>"assets/img/product/product-2.webp"
],
[
"id"=>3,
"name"=>"FASAL AMRIT",
"category"=>"Bio Products",
"cropTypes"=>["All Crops"],
"benefit"=>"Organic growth promoter enriched with amino acids.",
"description"=>"100% natural bio-stimulant extracted from seaweed.",
"composition"=>"Seaweed Extract + Amino Acids 20%",
"dosage"=>"2-3 ml / Liter",
"packSizes"=>["250ml","500ml","1L","5L"],
"image"=>"assets/img/product/product-3.webp"
],
[
"id"=>4,
"name"=>"MAHA-SULPHUR",
"category"=>"Fungicides",
"cropTypes"=>["Grapes","Mango","Apple"],
"benefit"=>"Prevents powdery mildew.",
"description"=>"Dual-action fungicide with sulphur nutrient support.",
"composition"=>"Sulphur 80% WDG",
"dosage"=>"1 kg / Acre",
"packSizes"=>["1kg","5kg","25kg"],
"image"=>"assets/img/product/product-1.webp"
],
[
"id"=>5,
"name"=>"SU-VARNA 19:19:19",
"category"=>"Fertilizers",
"cropTypes"=>["Sugarcane","Rice","Cotton"],
"benefit"=>"Balanced NPK growth booster.",
"description"=>"100% water-soluble fertilizer.",
"composition"=>"Total NPK 19-19-19",
"dosage"=>"5-6 gm / Liter",
"packSizes"=>["1kg","25kg"],
"image"=>"assets/img/product/product-2.webp"
],
[
"id"=>1,
"name"=>"ABHAY-GOLD",
"category"=>"Pesticides",
"cropTypes"=>["Cotton","Chilli","Tomato"],
"benefit"=>"Broad-spectrum protection against bollworms.",
"description"=>"A highly effective insecticide designed to tackle stubborn pests in commercial crops.",
"composition"=>"Emamectin Benzoate 5% SG",
"dosage"=>"100-150 gm / Acre per Spray",
"packSizes"=>["100g","250g","500g","1kg"],
"image"=>"assets/img/product/product-3.webp"
],
[
"id"=>2,
"name"=>"KISAN RAKSHA",
"category"=>"Herbicides",
"cropTypes"=>["Wheat","Barley"],
"benefit"=>"Selective weed eradication for higher yields.",
"description"=>"Post-emergent herbicide that targets Phalaris minor.",
"composition"=>"Clodinafop-propargyl 15% WP",
"dosage"=>"160 gm / Acre",
"packSizes"=>["160g","800g"],
"image"=>"assets/img/product/product-2.webp"
],
[
"id"=>3,
"name"=>"FASAL AMRIT",
"category"=>"Bio Products",
"cropTypes"=>["All Crops"],
"benefit"=>"Organic growth promoter enriched with amino acids.",
"description"=>"100% natural bio-stimulant extracted from seaweed.",
"composition"=>"Seaweed Extract + Amino Acids 20%",
"dosage"=>"2-3 ml / Liter",
"packSizes"=>["250ml","500ml","1L","5L"],
"image"=>"assets/img/product/product-3.webp"
],
[
"id"=>4,
"name"=>"MAHA-SULPHUR",
"category"=>"Fungicides",
"cropTypes"=>["Grapes","Mango","Apple"],
"benefit"=>"Prevents powdery mildew.",
"description"=>"Dual-action fungicide with sulphur nutrient support.",
"composition"=>"Sulphur 80% WDG",
"dosage"=>"1 kg / Acre",
"packSizes"=>["1kg","5kg","25kg"],
"image"=>"assets/img/product/product-1.webp"
],
[
"id"=>5,
"name"=>"SU-VARNA 19:19:19",
"category"=>"Fertilizers",
"cropTypes"=>["Sugarcane","Rice","Cotton"],
"benefit"=>"Balanced NPK growth booster.",
"description"=>"100% water-soluble fertilizer.",
"composition"=>"Total NPK 19-19-19",
"dosage"=>"5-6 gm / Liter",
"packSizes"=>["1kg","25kg"],
"image"=>"assets/img/product/product-2.webp"
],

[
"id"=>4,
"name"=>"MAHA-SULPHUR",
"category"=>"Fungicides",
"cropTypes"=>["Grapes","Mango","Apple"],
"benefit"=>"Prevents powdery mildew.",
"description"=>"Dual-action fungicide with sulphur nutrient support.",
"composition"=>"Sulphur 80% WDG",
"dosage"=>"1 kg / Acre",
"packSizes"=>["1kg","5kg","25kg"],
"image"=>"assets/img/product/product-1.webp"
],
[
"id"=>5,
"name"=>"SU-VARNA 19:19:19",
"category"=>"Fertilizers",
"cropTypes"=>["Sugarcane","Rice","Cotton"],
"benefit"=>"Balanced NPK growth booster.",
"description"=>"100% water-soluble fertilizer.",
"composition"=>"Total NPK 19-19-19",
"dosage"=>"5-6 gm / Liter",
"packSizes"=>["1kg","25kg"],
"image"=>"assets/img/product/product-2.webp"
],
];

@endphp




<section class="relative py-16">


    <div class="relative px-6 mx-auto">

        {{-- Background --}}
        <div class="absolute inset-0">
            <img src="{{ asset('assets/img/about/back-1.jpg') }}" class="object-cover w-full h-full opacity-75" alt="">
        </div>


        <div class="relative z-10 flex flex-col items-center mt-4 text-center md:mt-0">

            <div class="flex items-center gap-2 opacity-0 md:gap-4 scroll-animate" data-animation="animate__flipInX">
                <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon"
                    class="relative object-contain h-12 md:h-28 left-2 md:left-14">

                <span class="font-serif text-lg font-bold tracking-wide uppercase md:text-2xl text-brand-dark">
                    Our Collection
                </span>

                <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon"
                    class="relative object-contain h-12 rotate-180 md:h-28 right-2 md:right-14">
            </div>

            <h2 class="mt-2 font-serif text-4xl font-bold text-center text-gray-900 md:mt-0 md:text-5xl lg:text-6xl">
                Our <span class="italic text-emerald-600">Products</span>
            </h2>

            <p
                class="max-w-2xl mx-auto mt-4 mb-10 text-base font-bold leading-relaxed text-center text-gray-600 md:mt-6 md:mb-16 md:text-lg">
                Our products are formulated to provide protection against a wide range of pests and diseases.
            </p>

        </div>
    </div>
    <div class="px-6 mx-auto">

        {{-- FILTER --}}
        <div class="flex flex-wrap justify-center gap-4 m-16">

            @foreach($categories as $cat)
            <button onclick="setActiveFilter(this); filterProducts('{{ $cat }}')" class="filter-btn px-6 py-2.5 rounded-full font-semibold text-sm border-2 
           bg-white border-light text-primary
           hover:border-brand hover:text-brand transition-all duration-300">

                {{ $cat }}

            </button>
            @endforeach

        </div>



        {{-- PRODUCT GRID --}}
        <div class="grid grid-cols-2 gap-6 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 md:gap-8">
            @foreach($products as $product)
            <div class="relative overflow-hidden transition-all duration-500 border product-card group rounded-2xl shadow-soft border-light hover:-translate-y-3 hover:shadow-2xl hover:border-brand"
                data-category="{{ $product['category'] }}" onclick='openModal(@json($product))'>

                {{-- Spinning conic gradient border layer --}}
                <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition duration-300
           bg-[conic-gradient(from_0deg,transparent,theme(colors.emerald.500),theme(colors.emerald.400),transparent_40%)]
           animate-spin-slow pointer-events-none z-0">
                </div>

                {{-- Inner card content with solid background and inset padding to reveal border --}}
                <div
                    class="relative flex flex-col h-full min-h-[26rem] md:min-h-[28rem] m-1 transition-all duration-300 bg-white shadow-sm rounded-2xl group-hover:shadow-2xl z-10">
                    <div class="relative h-48 overflow-hidden rounded-t-2xl bg-soft">
                        <img src="{{ $product['image'] }}"
                            class="object-cover w-full h-full transition duration-700 group-hover:scale-110 ">
                    </div>
                    <div class="flex flex-col justify-between flex-grow p-6">
                        <div>
                            <h3 class="mb-2 font-serif text-2xl font-bold transition text-primary group-hover:text-brand">
                                {{ $product['name'] }}
                            </h3>

                            {{-- CROP TAGS --}}
                            <div class="flex flex-wrap gap-2 mb-3">
                                @foreach($product['cropTypes'] as $crop)
                                <span class="px-2 py-1 font-serif text-xs border rounded-md bg-soft text-secondary border-light">
                                    {{ $crop }}
                                </span>
                                @endforeach
                            </div>
                            <p class="mb-4 text-sm text-secondary line-clamp-2">
                                {{ $product['benefit'] }}
                            </p>
                        </div>
                        <button
                            class="w-full px-4 py-2 text-sm font-bold transition border rounded-md border-brand text-brand group-hover:bg-brand group-hover:text-white">
                            View Details
                        </button>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

    </div>
</section>



{{-- MODAL --}}
<div id="productModal" class="fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-sm">

    <div class="relative w-full h-full overflow-y-auto bg-white">

        {{-- CLOSE BUTTON --}}
        <button onclick="closeModal()"
            class="absolute w-12 h-12 transition rounded-full top-6 right-6 bg-soft text-primary shadow-soft hover:bg-brand hover:text-white">
            ✕
        </button>

        <div class="px-6 py-20 mx-auto max-w-7xl">

            <div class="grid items-center gap-16 md:grid-cols-2">

                {{-- LEFT SIDE - PRODUCT VISUAL --}}
                <div
                    class="relative rounded-3xl overflow-hidden bg-soft min-h-[450px] flex items-center justify-center">

                    {{-- Background image --}}
                    <div id="modalImage" class="absolute inset-0 bg-center bg-cover">
                    </div>



                </div>



                {{-- RIGHT SIDE - DETAILS --}}
                <div>

                    {{-- CATEGORY BADGE --}}
                    <span id="modalCategory" class="inline-block mb-4 px-4 py-1.5 rounded-full text-sm 
                                 border border-brand text-brand bg-white">
                    </span>

                    {{-- TITLE --}}
                    <h2 id="modalTitle" class="mb-4 font-serif text-5xl font-bold text-primary">
                    </h2>

                    {{-- BENEFIT --}}
                    <p id="modalBenefit" class="mb-6 font-serif text-lg font-medium text-secondary">
                    </p>

                    {{-- DESCRIPTION --}}
                    <p id="modalDescription" class="mb-8 leading-relaxed text-secondary">
                    </p>

                    <hr class="mb-8 border-light">

                    {{-- INFO GRID --}}
                    <div class="grid gap-8 text-sm sm:grid-cols-2">

                        {{-- Composition --}}
                        <div class="flex gap-4">
                            <div
                                class="flex items-center justify-center w-12 h-12 bg-soft text-brand rounded-xl shadow-soft">
                                {{-- Beaker Icon --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 3h6m-3 0v5l5.5 9.5A2 2 0 0116.5 20h-9a2 2 0 01-1.5-2.5L11 8V3" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="mb-1 font-serif font-semibold text-primary">
                                    Composition
                                </h4>
                                <p id="modalComposition" class=" text-secondary"></p>
                            </div>
                        </div>

                        {{-- Dosage --}}
                        <div class="flex gap-4">
                            <div
                                class="flex items-center justify-center w-12 h-12 bg-soft text-brand rounded-xl shadow-soft">
                                {{-- Info Icon --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="1.8">
                                    <circle cx="12" cy="12" r="9" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8h.01M11 12h2v4h-2z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="mb-1 font-serif font-semibold text-primary">
                                    Recommended Dosage
                                </h4>
                                <p id="modalDosage" class=" text-secondary"></p>
                            </div>
                        </div>

                        {{-- Crops --}}
                        <div class="flex gap-4">
                            <div
                                class="flex items-center justify-center w-12 h-12 bg-soft text-brand rounded-xl shadow-soft">
                                {{-- Sprout Icon --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 19V10m0 0C9 10 7 8 7 5c3 0 5 2 5 5zm0 0c3 0 5-2 5-5-3 0-5 2-5 5z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="mb-1 font-serif font-semibold text-primary">
                                    Suitable Crops
                                </h4>
                                <p id="modalCrops" class="text-secondary"></p>
                            </div>
                        </div>

                        {{-- Sizes --}}
                        <div class="flex gap-4">
                            <div
                                class="flex items-center justify-center w-12 h-12 bg-soft text-brand rounded-xl shadow-soft">
                                {{-- Package Icon --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 16V8a2 2 0 00-1-1.73L13 2.27a2 2 0 00-2 0L4 6.27A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="mb-2 font-serif font-semibold text-primary">
                                    Available Sizes
                                </h4>
                                <div id="modalSizes" class="flex flex-wrap gap-2"></div>
                            </div>
                        </div>

                    </div>

                    {{-- CTA --}}
                    <div class="mt-10">
                        <button
                            class="px-8 py-4 font-bold text-white transition bg-brand hover:bg-brand-dark rounded-xl shadow-medium">
                            Enquire Now / Get Quote
                        </button>

                        <p class="mt-3 text-xs text-secondary">
                            Connect with our agronomy experts for precise usage instructions.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>



<script>
    function filterProducts(category) {
    document.querySelectorAll('.product-card').forEach(card => {
        card.style.display =
            category === 'All' || card.dataset.category === category
            ? 'block' : 'none';
    });
}

function openModal(product) {

    document.getElementById('productModal').classList.remove('hidden');

    document.getElementById('modalTitle').innerText = product.name;
    document.getElementById('modalBenefit').innerText = product.benefit;
    document.getElementById('modalDescription').innerText = product.description;
    document.getElementById('modalComposition').innerText = product.composition;
    document.getElementById('modalDosage').innerText = product.dosage;
    document.getElementById('modalCrops').innerText = product.cropTypes.join(', ');
    document.getElementById('modalCategory').innerText = product.category;

    document.getElementById('modalImage').style.backgroundImage =
        `url('${product.image}')`;

    const sizesContainer = document.getElementById('modalSizes');
    sizesContainer.innerHTML = '';
    product.packSizes.forEach(size => {
        sizesContainer.innerHTML +=
            `<span class="px-3 py-1 text-xs border rounded bg-soft text-secondary border-light">${size}</span>`;
    });
}

function closeModal() {
    document.getElementById('productModal').classList.add('hidden');
}

function setActiveFilter(button) {
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.classList.remove('bg-brand','text-white','border-brand','shadow-medium');
        btn.classList.add('bg-white','text-primary','border-light');
    });

    button.classList.remove('bg-white','text-primary','border-light');
    button.classList.add('bg-brand','text-white','border-brand','shadow-medium');
}
</script>