<section class="py-20 overflow-hidden bg-white">
    <div class="px-6 mx-auto max-w-7xl">

        <div class="flex flex-col items-center mb-16 text-center">
            <span
                class="px-4 py-1 mb-4 text-xs font-bold tracking-widest uppercase rounded-full bg-brand/10 text-brand">
                Smart Agriculture
            </span>
            <h2 class="text-4xl font-bold md:text-5xl text-primary">
                Crop Protection <span class="text-brand-lime">Categories</span>
            </h2>
        </div>

        <div class="grid gap-8 md:grid-cols-3">

            @php
            $categories = [
            [
            'title' => 'Insecticide',
            'hindi' => 'कीटनाशक',
            'icon' => 'bug_report',
            'color' => 'bg-red-50 text-red-600',
            'details' => [
            ['label' => 'Controls', 'value' => 'Aphids, Thrips, Bollworm'],
            ['label' => 'Crops', 'value' => 'Cotton, Chilli, Veggies'],
            ['label' => 'Dose', 'value' => '200–300 ml/ha'],
            ['label' => 'Water', 'value' => '150–200 Liters'],
            ]
            ],
            [
            'title' => 'Fungicide',
            'hindi' => 'फफूंदनाशक',
            'icon' => 'biotech',
            'color' => 'bg-blue-50 text-blue-600',
            'details' => [
            ['label' => 'Controls', 'value' => 'Blight, Rust, Mildew'],
            ['label' => 'Crops', 'value' => 'Wheat, Tomato, Fruits'],
            ['label' => 'Dose', 'value' => '400–600 gm/ha'],
            ['label' => 'Timing', 'value' => 'Morning/Evening'],
            ]
            ],
            [
            'title' => 'Herbicide',
            'hindi' => 'खरपतवारनाशक',
            'icon' => 'grass',
            'color' => 'bg-amber-50 text-amber-600',
            'details' => [
            ['label' => 'Controls', 'value' => 'Broad Leaf Weeds'],
            ['label' => 'Pre-Em', 'value' => '1–2 Days Sowing'],
            ['label' => 'Post-Em', 'value' => '15–25 Days'],
            ['label' => 'Dose', 'value' => '1–1.5 Liter/ha'],
            ]
            ]
            ];
            @endphp

            @foreach($categories as $cat)
            <div
                class="category-card group relative p-8 bg-white border border-gray-100 rounded-[2.5rem] shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">

                <div class="flex items-center justify-between mb-8">
                    <div
                        class="w-16 h-16 {{ $cat['color'] }} rounded-2xl flex items-center justify-center transition-transform duration-500 group-hover:rotate-12">
                        <span class="text-3xl material-icons">{{ $cat['icon'] }}</span>
                    </div>
                    <div class="text-right">
                        <h3 class="text-2xl font-bold text-primary">{{ $cat['title'] }}</h3>
                        <p class="text-sm font-bold tracking-tighter uppercase text-brand-lime">{{ $cat['hindi'] }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4">
                    @foreach($cat['details'] as $detail)
                    <div
                        class="flex items-start gap-3 p-3 transition-colors rounded-xl bg-gray-50 group-hover:bg-brand/5">
                        <div class="mt-1 w-1.5 h-1.5 rounded-full bg-brand-lime"></div>
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">{{ $detail['label']
                                }}</p>
                            <p class="text-sm font-semibold leading-tight text-secondary">{{ $detail['value'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="mt-8">
                    <a href="#"
                        class="flex items-center justify-center w-full py-3 text-sm font-bold text-white transition-all duration-300 translate-y-4 opacity-0 bg-primary rounded-xl group-hover:opacity-100 group-hover:translate-y-0">
                        View Products →
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<script>
    import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

export function initCategoryAnimations() {
    // 1. Title Animation
    gsap.from(".px-4.py-1, h2", {
        scrollTrigger: {
            trigger: ".category-card",
            start: "top 90%",
        },
        y: 30,
        opacity: 0,
        stagger: 0.2,
        duration: 1,
        ease: "power3.out"
    });

    // 2. Cards Stagger Entrance
    gsap.from(".category-card", {
        scrollTrigger: {
            trigger: ".category-card",
            start: "top 80%",
        },
        y: 60,
        opacity: 0,
        duration: 1.2,
        stagger: 0.2, // This creates the "one-by-one" effect
        ease: "power4.out"
    });
}
</script>