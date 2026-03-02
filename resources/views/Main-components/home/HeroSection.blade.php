@php
$slides = [
[
'title' => 'Advanced Crop Protection',
'highlight' => 'For Sustainable Farming.',
'desc' => 'High-performance pesticide and crop protection solutions designed to maximize yield while protecting soil
health.',
'image' => 'assets/img/banner/banner-2.jpg',
'stat1' => '25',
'stat1_label' => 'Years Experience',
'stat2' => '200',
'stat2_label' => 'Active Distributors',
],
[
'title' => 'Precision Agricultural Chemicals',
'highlight' => 'Engineered for Results.',
'desc' => 'Scientifically formulated insecticides and fungicides for reliable, long-term crop defense.',
'image' => 'assets/img/banner/banner-3.jpg',
'stat1' => '150',
'stat1_label' => 'Products',
'stat2' => '18',
'stat2_label' => 'States Served',
],

[
'title' => 'Precision Agricultural Chemicals',
'highlight' => 'Engineered for Results.',
'desc' => 'Scientifically formulated insecticides and fungicides for reliable, long-term crop defense.',
'image' => 'assets/img/banner/banner-4.jpg',
'stat1' => '150',
'stat1_label' => 'Products',
'stat2' => '18',
'stat2_label' => 'States Served',
],
[
'title' => 'Precision Agricultural Chemicals',
'highlight' => 'Engineered for Results.',
'desc' => 'Scientifically formulated insecticides and fungicides for reliable, long-term crop defense.',
'image' => 'assets/img/banner/banner-5.jpg',
'stat1' => '150',
'stat1_label' => 'Products',
'stat2' => '18',
'stat2_label' => 'States Served',
],
];
@endphp

<style>
    /* THE SECRET: This creates the smooth "inward" curve (fillet) */
    .pixel-perfect-notch {

        /* We mask the image to leave a hole for the button with a smooth corner */
        mask-image: radial-gradient(circle at var(--radius) 0, transparent var(--radius), black calc(var(--radius) + 0.5px)),
        linear-gradient(black, black);
        mask-size: var(--radius) var(--radius),
        100% 100%;
        mask-position: var(--btn-w) calc(100% - var(--btn-h)),
        0 0;
        mask-repeat: no-repeat;
        mask-composite: subtract;
        -webkit-mask-composite: destination-out;
    }

    /* Desktop adjustments for the notch */
    @media (min-width: 768px) {
        .pixel-perfect-notch {
            --btn-w: 320px;
            --btn-h: 80px;
        }
    }

    /* Fallback for older browsers: creates the sharp notch */
    .pixel-perfect-clip {
        clip-path: polygon(0 0, 100% 0, 100% 100%, var(--btn-w) 100%, var(--btn-w) calc(100% - var(--btn-h)), 0 calc(100% - var(--btn-h)));
    }
</style>

<section class="min-h-screen p-2 font-sans sm:p-4 bg-light">
    <div class="mx-auto bg-white-custom rounded-[24px] lg:rounded-[48px] p-2 md:p-4 shadow-soft">
        <div class="swiper heroSwiper relative w-full h-[780px] md:h-[660px] overflow-hidden rounded-[24px] lg:rounded-[38px] group">
            <div class="swiper-wrapper">
                @foreach($slides as $slide)
                <div class="relative h-full overflow-hidden swiper-slide">
                    <div class="absolute inset-0 z-0 pixel-perfect-notch">
                        <img src="{{ asset($slide['image']) }}"
                             class="object-cover w-full h-full"
                             alt="Agriculture">
                        <div class="absolute inset-0 bg-black/40"></div>
                    </div>

                    <div class="relative z-10 flex flex-col justify-between h-full p-6 md:p-10 lg:p-16">
                        <div class="flex flex-col items-start justify-between gap-8 pt-4 lg:flex-row lg:gap-12 md:pt-10">
                            <div class="w-full max-w-2xl">
                                <h1 class="text-white text-4xl lg:text-5xl font-bold leading-[1.05] font-serif">
                                    {{ $slide['title'] }} <br>
                                    <span class="text-brand-lime">{{ $slide['highlight'] }}</span>
                                </h1>
                                <p class="mt-4 md:mt-8 text-white/80 text-base lg:text-[18px] max-w-md font-serif">
                                    {{ $slide['desc'] }}
                                </p>
                            </div>

                            <div class="w-full lg:w-[380px] space-y-4 lg:space-y-5">
                                <div class="bg-white/10 backdrop-blur-xl border border-white/20 p-6 lg:p-8 rounded-[24px] lg:rounded-[30px] text-white shadow-2xl">
                                    <p class="text-sm lg:text-[15px] text-white/80 leading-relaxed mb-6">
                                        We empower farmers with cutting-edge tools and technology.
                                    </p>
                                    <a href="#" class="inline-flex items-center gap-2 text-sm font-bold transition-all hover:gap-4">
                                        Learn more <span>→</span>
                                    </a>
                                </div>

                                <div class="flex gap-3 lg:gap-4">
                                    @foreach(['stat1', 'stat2'] as $statKey)
                                    <div class="flex-1 bg-white/10 backdrop-blur-xl border border-white/20 p-4 lg:p-6 rounded-[20px] lg:rounded-[30px] text-white">
                                        <div class="mb-1 text-2xl font-bold stat-number lg:text-4xl" data-target="{{ $slide[$statKey] }}">
                                            0
                                        </div>
                                        <div class="text-[8px] lg:text-[9px] uppercase tracking-[1.5px] text-white/50 font-bold">
                                            {{ $slide[$statKey.'_label'] }}
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        
                        <a href="/quote" class="absolute bottom-0 left-0 w-[240px] md:w-[320px] h-[64px] md:h-[80px] rounded-tr-[30px] md:rounded-tr-[40px] overflow-hidden group block">
                            <div class="absolute inset-0 transition-colors duration-300 bg-brand group-hover:bg-brand-dark"></div>
                            <div class="relative z-10 flex items-center justify-between h-full px-6 md:px-10">
                                <span class="text-lg font-bold text-white md:text-xl">Get Started</span>
                                <span class="text-xl text-white transition-transform duration-300 group-hover:translate-x-2">→</span>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination !bottom-4 !right-6 !w-auto"></div>
        </div>

        <div class="flex flex-col items-start justify-between gap-6 px-6 py-10 lg:flex-row lg:items-end lg:px-12 lg:py-16 lg:gap-0">

            <h2 class="text-4xl md:text-5xl lg:text-[54px] font-bold text-primary leading-tight tracking-tight  animate__lightSpeedInLeft">
                Engineering <br class="hidden "/>
                <span class="font-medium text-muted">The Future Of</span><br />
                Every Harvest.
            </h2>

            <p class="text-secondary text-sm lg:text-[16px] leading-relaxed w-full lg:max-w-[440px] mb-2 animate__animated animate__lightSpeedInRight">
                We deliver high-precision technology to shatter yield ceilings.
                Through real-time monitoring and advanced automation,
                we're not just supporting farmers—we're re-engineering the field.
            </p>

        </div>
    </div>
</section>


