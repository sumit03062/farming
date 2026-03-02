@php
$faqs = [
[
'question' => 'Are your products safe for organic farming?',
'answer' => 'Yes, we offer eco-friendly and certified organic-compatible formulations.'
],
[
'question' => 'Do you provide bulk distributor pricing?',
'answer' => 'Yes, we offer structured distributor pricing based on volume and region.'
],
[
'question' => 'Can I request a product sample?',
'answer' => 'Samples are available for verified distributors and large-scale buyers.'
],
[
'question' => 'Do you export internationally?',
'answer' => 'Yes, we export to multiple countries with proper regulatory compliance.'
],
[
'question' => 'How can I become a distributor?',
'answer' => 'You can submit a distributor inquiry through our contact form.'
],
];
@endphp


<div class="relative py-12 md:py-24 bg-soft">
    <div
        class="absolute top-0 z-0 scale-x-50 rotate-180 pointer-events-none lg:-translate-y-1/2 grow -left-48 opacity-30 lg:opacity-100 lg:scale-100 lg:left-36 lg:top-60">
    </div>

    {{-- lottie grow: Right side --}}
    <div
        class="absolute top-0 z-0 scale-x-50 rotate-180 pointer-events-none lg:-translate-y-1/2 grow -right-48 opacity-30 lg:opacity-100 lg:scale-100 lg:right-36 lg:top-60">
    </div>


    <section class="relative z-10 overflow-hidden md:pb-20">

        <div class="relative z-10 flex flex-col items-center mt-4 text-center md:mt-0">

            <div class="flex items-center gap-2 opacity-0 md:gap-4 scroll-animate" data-animation="animate__flipInX">
                <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon"
                    class="relative object-contain h-12 md:h-28 left-2 md:left-14">

                <h2
                    class="mt-2 font-serif text-4xl font-bold text-center text-gray-900 md:mt-0 md:text-5xl lg:text-6xl">
                    Get In <span class="italic text-emerald-600">Touch</span>
                </h2>

                <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon"
                    class="relative object-contain h-12 rotate-180 md:h-28 right-2 md:right-14">
            </div>
        </div>

        <div class="relative max-w-[1320px] mx-4 xl:mx-auto group rounded-[24px] md:rounded-[40px] p-[2px] lg:mt-12 mt-8">

            <div class="relative bg-white-custom rounded-[24px] md:rounded-[40px] p-3 md:p-6 shadow-soft">

                <div class="relative overflow-hidden rounded-[20px] md:rounded-[32px]">

                    <div class="absolute inset-0">
                        <img src="{{ asset('assets/img/about-1.jpg') }}" class="object-cover w-full h-full"
                            alt="Farm Background">
                        <div class="absolute inset-0 overlay-dark"></div>
                    </div>

                    <div
                        class="relative z-10 grid grid-cols-1 gap-10 p-6 text-white sm:p-10 lg:p-16 lg:grid-cols-2 lg:gap-16">

                        <div class="space-y-6 md:space-y-8">

                            <h2 class="text-4xl lg:text-[52px] leading-tight font-bold opacity-0 scroll-animate"
                                data-animation="animate__fadeInDown">
                                You Have Questions,<br>
                                <span class="text-brand-light">
                                    We Have Answers
                                </span>
                            </h2>

                            <p class="max-w-md text-sm md:text-base text-white/80">
                                Connect with our agricultural experts for product details,
                                distribution partnerships, and crop solutions.
                            </p>

                            <div class="space-y-5 text-sm md:space-y-6 md:text-base text-white/90">

                                <div>
                                    <h4 class="text-xs tracking-widest uppercase md:text-sm text-brand-light">
                                        Location
                                    </h4>
                                    <p>Organic Agro Industries<br>
                                        Industrial Area, Gujarat, India</p>
                                </div>

                                <div>
                                    <h4 class="text-xs tracking-widest uppercase md:text-sm text-brand-light">
                                        Email
                                    </h4>
                                    <p>support@yourcompany.com</p>
                                </div>

                                <div>
                                    <h4 class="text-xs tracking-widest uppercase md:text-sm text-brand-light">
                                        Contact
                                    </h4>
                                    <p>+91 98765 43210</p>
                                </div>

                            </div>

                        </div>

                        <div
                            class="bg-white-custom text-primary rounded-[20px] md:rounded-[28px] p-6 sm:p-8 md:p-10 shadow-bold">

                            <h3 class="mb-4 text-xl font-bold md:mb-6 md:text-2xl text-primary">
                                Tell Us What You Need
                            </h3>

                            <form class="space-y-4 md:space-y-6">

                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <input type="text" placeholder="First Name"
                                        class="w-full px-4 py-3 border rounded-full border-light focus:outline-none focus:border-brand">

                                    <input type="text" placeholder="Last Name"
                                        class="w-full px-4 py-3 border rounded-full border-light focus:outline-none focus:border-brand">
                                </div>

                                <input type="email" placeholder="Email Address"
                                    class="w-full px-4 py-3 border rounded-full border-light focus:outline-none focus:border-brand">

                                <textarea placeholder="Your Message" rows="4"
                                    class="w-full border border-light rounded-[20px] px-4 py-3 focus:outline-none focus:border-brand"></textarea>

                                <button type="submit"
                                    class="relative w-full py-3 overflow-hidden rounded-full group shadow-soft">

                                    <span class="absolute inset-0 bg-brand"></span>
                                    <span
                                        class="absolute inset-0 transition-transform duration-300 origin-left scale-x-0 bg-brand-dark group-hover:scale-x-100"></span>

                                    <span class="relative z-10 font-semibold text-white">
                                        Submit Inquiry →
                                    </span>

                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- lottie grow: Left side --}}
    <div
        class="absolute z-0 scale-x-50 rotate-180 lg:-translate-y-1/2 pointer-events-none grow -left-48 opacity-30 lg:opacity-100 lg:scale-100 lg:left-36 lg:top-[68rem]">
    </div>

    {{-- lottie grow: Right side --}}
    <div
        class="absolute z-0 scale-x-50 rotate-180 lg:-translate-y-1/2 pointer-events-none grow -right-48 opacity-30 lg:opacity-100 lg:scale-100 lg:right-36 lg:top-[68rem]">
    </div>

    <section class="relative z-10 pt-12 overflow-hidden md:pt-0">

        <div class="relative z-10 flex flex-col items-center mt-4 text-center md:mt-0">

            <div class="flex items-center gap-2 opacity-0 md:gap-4 scroll-animate" data-animation="animate__flipInX">
                <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon"
                    class="relative object-contain h-12 md:h-28 left-2 md:left-14">

                <h2
                    class="mt-2 font-serif text-4xl font-bold text-center text-gray-900 md:mt-0 md:text-5xl lg:text-6xl">
                    FA<span class="italic text-emerald-600">Q</span>
                </h2>

                <img src="{{ asset('assets/img/icon-1.png') }}" alt="Leaf Icon"
                    class="relative object-contain h-12 rotate-180 md:h-28 right-2 md:right-14">
            </div>
        </div>

        <div
            class="max-w-[1320px] mx-4 xl:mx-auto bg-white-custom rounded-[24px] md:rounded-[40px] p-6 md:p-10 lg:p-16 shadow-soft mt-8 lg:mt-12">

            <div class="grid grid-cols-1 gap-10 lg:gap-20 lg:grid-cols-2">

                <div>
                    <h2 class="text-3xl md:text-4xl lg:text-[48px] font-bold text-primary leading-tight opacity-0 scroll-animate"
                        data-animation="animate__fadeInDown">
                        Frequently Asked<br class="hidden sm:block">
                        Questions
                    </h2>

                    <p class="max-w-sm mt-4 text-sm md:mt-6 md:text-base text-secondary">
                        Find quick answers to common questions about our products,
                        distribution, and agricultural solutions.
                    </p>
                </div>

                <div class="space-y-4 md:space-y-6">

                    @foreach($faqs as $index => $faq)

                    <div x-data="{ open: false }" class="pb-4 border-b md:pb-6 border-light">

                        <button @click="open = !open" class="flex items-center justify-between w-full gap-4 text-left">

                            <div class="flex items-start gap-3 md:gap-4">

                                <span class="font-semibold text-brand mt-0.5 md:mt-0">
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </span>

                                <span class="text-sm font-bold md:text-base text-primary">
                                    {{ $faq['question'] }}
                                </span>

                            </div>

                            <span class="flex-shrink-0 text-xl text-brand" x-text="open ? '−' : '+'">
                            </span>

                        </button>

                        <div x-show="open" x-collapse
                            class="mt-3 text-sm leading-relaxed md:mt-4 md:text-base text-secondary ml-7 md:ml-9">

                            {{ $faq['answer'] }}

                        </div>

                    </div>

                    @endforeach

                </div>

            </div>

        </div>

    </section>

    <div
        class="absolute z-0 hidden scale-x-50 rotate-180 pointer-events-none grow -left-48 opacity-30 lg:opacity-100 lg:scale-100 lg:left-36 lg:-translate-y-20 sm:block">
    </div>

    {{-- lottie grow: Right side --}}
    <div
        class="absolute z-0 hidden scale-x-50 rotate-180 pointer-events-none lg:-translate-y-20 grow -right-48 opacity-30 lg:opacity-100 lg:scale-100 lg:right-36 sm:block">
    </div>


</div>