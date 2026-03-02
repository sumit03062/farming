{{-- {{-- @props([
'company' => 'AgriCultur',
'tagline' => 'Advanced chemical solutions for modern farming.',
'mode' => 'auto', // auto | day | night
])

<footer id="scene-container" data-mode="{{ $mode }}"
    class="relative w-full h-[500px] overflow-hidden bg-gradient-to-b from-[#E3F2FD] to-[#BBDEFB] pt-40">



    <!-- SKY -->
    <div id="sky-layer" class="absolute inset-0 overflow-hidden">

        <!-- Base Sky Gradient -->
        <div class="absolute inset-0 bg-sky-gradient"></div>

        <!-- Sun Glow -->
        <div class="absolute sun-glow top-[-120px] left-[50px] translate-x-[50%] w-[600px] h-[600px] fil"></div>

        <!-- Atmospheric Haze -->
        <div class="absolute bottom-0 w-full sky-haze h-[200px]"></div>

        <!-- Sun Rays -->
        <div id="sun-rays-group" class="absolute inset-0 sun-rays mix-blend-screen">
            <svg viewBox="0 0 1440 600" preserveAspectRatio="none" class="w-full h-full">
                <defs>
                    <radialGradient id="rayFade" cx="50%" cy="0%" r="70%">
                        <stop offset="0%" stop-color="#FFFDE7" stop-opacity="0.9" />
                        <stop offset="60%" stop-color="#FFFDE7" stop-opacity="0.4" />
                        <stop offset="100%" stop-color="#FFFDE7" stop-opacity="0" />
                    </radialGradient>
                </defs>

                <g fill="url(#rayFade)">
                    <polygon points="720,0 580,600 860,0" />
                    <polygon points="720,0 200,600 400,0" />
                    <polygon points="720,0 1040,600 1240,0" />
                    <polygon points="720,0 0,600 200,0" />
                    <polygon points="720,0 1240,600 1440,0" />
                </g>
            </svg>
        </div>

    </div>


    {{-- cloud --}}

    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">

        <!-- Cloud 1 -->
        <div class="cloud-real absolute top-16 left-[10%] w-64 h-32" data-speed="20">
            <div class="puff puff-1"></div>
            <div class="puff puff-2"></div>
            <div class="puff puff-3"></div>
            <div class="puff puff-4"></div>
        </div>

        <!-- Cloud 2 -->
        <div class="cloud-real absolute top-32 left-[55%] w-48 h-24 scale-90 opacity-80" data-speed="28">
            <div class="puff puff-1"></div>
            <div class="puff puff-2"></div>
            <div class="puff puff-3"></div>
        </div>

    </div>


    <!-- FAR HILLS -->
    <div class="absolute z-0 w-full bottom-40 h-72">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none" class="w-full h-full">
            <defs>
                <linearGradient id="farHillGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#90A4AE" />
                    <stop offset="100%" stop-color="#607D8B" />
                </linearGradient>
            </defs>
            <<path class="hill-shape" d="M0,140 C240,60 480,200 720,170 C960,130 1200,60 1440,100 L1440,256 L0,256 Z"
                fill="url(#midHillGradient)" />

        </svg>
    </div>
    <!-- MOVING FOG -->
    <div class="absolute z-0 w-full h-40 overflow-hidden pointer-events-none bottom-36">
        <div class="fog-layer"></div>
    </div>


    <!-- MID HILLS -->
    <div class="absolute z-0 w-full h-64 bottom-32">
        <svg viewBox="0 0 1440 256" preserveAspectRatio="none" class="w-full h-full">
            <defs>
                <linearGradient id="midHillGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#78909C" />
                    <stop offset="100%" stop-color="#546E7A" />
                </linearGradient>
            </defs>
            <path d="M0,140 C240,60 480,200 720,170 C960,130 1200,60 1440,100 L1440,256 L0,256 Z"
                fill="url(#midHillGradient)" />
        </svg>
    </div>

    <!-- FRONT HILL SHADOW -->
    <div class="absolute z-0 w-full h-48 bottom-28">
        <svg viewBox="0 0 1440 192" preserveAspectRatio="none" class="w-full h-full">
            <defs>
                <linearGradient id="frontHillGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#455A64" />
                    <stop offset="100%" stop-color="#37474F" />
                </linearGradient>
            </defs>
            <path d="M0,100 C300,40 900,120 1440,60 L1440,192 L0,192 Z" fill="url(#frontHillGradient)" opacity="0.8" />
        </svg>
    </div>


    <!-- FAR FIELD -->
    <div class="absolute z-0 w-full h-56 bottom-28">
        <svg viewBox="0 0 1440 220" preserveAspectRatio="none" class="w-full h-full">
            <defs>
                <linearGradient id="fieldGradientReal" x1="0%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#FFE082" />
                    <stop offset="100%" stop-color="#F9A825" />
                </linearGradient>

                <!-- Perspective crop pattern -->
                <pattern id="cropRowsReal" width="40" height="40" patternUnits="userSpaceOnUse"
                    patternTransform="skewX(20) scale(1,0.6)">
                    <line x1="0" y1="0" x2="0" y2="40" stroke="#FBC02D" stroke-width="2" opacity="0.4" />
                </pattern>
            </defs>

            <path class="field-shape" d="M0,60 C300,10 1100,120 1440,40 L1440,220 L0,220 Z"
                fill="url(#fieldGradientReal)" />

            <path class="field-crops" d="M0,60 C300,10 1100,120 1440,40 L1440,220 L0,220 Z" fill="url(#cropRowsReal)" />
        </svg>
    </div>



    <!-- FRONT GRASS -->
    <div class="absolute bottom-0 z-0 w-full h-40">
        <svg viewBox="0 0 1440 180" preserveAspectRatio="none" class="w-full h-full">
            <defs>
                <linearGradient id="grassGradientReal" x1="0%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#66BB6A" />
                    <stop offset="100%" stop-color="#2E7D32" />
                </linearGradient>

                <linearGradient id="grassHighlight" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="rgba(255,255,255,0.2)" />
                    <stop offset="100%" stop-color="rgba(255,255,255,0)" />
                </linearGradient>
            </defs>

            <path class="grass-shape" d="M0,40 C500,90 1000,10 1440,50 L1440,180 L0,180 Z"
                fill="url(#grassGradientReal)" />

            <path d="M0,50 C500,100 1000,20 1440,60 L1440,180 L0,180 Z" fill="url(#grassHighlight)" opacity="0.3" />
        </svg>
    </div>

    {{-- left side tree --}}

    <div class="absolute z-10 flex items-end justify-between w-full px-4 pointer-events-none bottom-20 md:px-12">

        <div class="flex space-x-4 pop-up-element group-trees-left">
            <svg class="w-24 h-48 text-[#2E7D32] tree-sway origin-bottom drop-shadow-xl" viewBox="0 0 100 200"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M48 180L48 200M43 200L53 200" stroke="#5D4037" stroke-width="8" stroke-linecap="round" />
                <g fill="currentColor" id="tree1-leaves-group">
                    <path d="M50 10C20 80 15 160 50 185C85 160 80 80 50 10Z" fill="#388E3C" />
                    <path d="M50 15C25 80 25 150 50 175C75 150 75 80 50 15Z" fill="#43A047" />
                    <path d="M50 30C30 90 30 140 50 160C70 140 70 90 50 30Z" fill="#66BB6A" />
                </g>
            </svg>
            <svg class="w-20 h-36 text-[#388E3C] tree-sway origin-bottom drop-shadow-lg" viewBox="0 0 100 200"
                fill="none">
                <path d="M50 180L50 200M45 200L55 200" stroke="#5D4037" stroke-width="6" stroke-linecap="round" />
                <g fill="currentColor" id="tree2-leaves-group">
                    <path d="M50 20C25 85 20 160 50 180C80 160 75 85 50 20Z" fill="#2E7D32" />
                    <path d="M50 40C30 95 30 150 50 170C70 150 70 95 50 40Z" fill="#43A047" />
                </g>
            </svg>
        </div>


        {{-- tracter --}}

        <div class="absolute bottom-0 left-0 w-full h-64 overflow-visible pointer-events-none">
            <div class="absolute left-0 w-64 h-48 bottom-10 pop-up-element" id="tractor-rig">

                <div id="smoke-container" class="absolute z-0 w-1 h-1 overflow-visible left-36 top-4"></div>

                <svg viewBox="0 0 260 180" class="relative z-10 w-full h-full drop-shadow-2xl"
                    xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="tractorGreen" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0%" stop-color="#43A047" />
                            <stop offset="100%" stop-color="#1B5E20" />
                        </linearGradient>
                        <linearGradient id="windowReflect" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#E3F2FD" stop-opacity="0.8" />
                            <stop offset="50%" stop-color="#90CAF9" stop-opacity="0.6" />
                            <stop offset="100%" stop-color="#64B5F6" stop-opacity="0.3" />
                        </linearGradient>
                    </defs>

                    <ellipse id="tractor-shadow" cx="130" cy="165" rx="80" ry="6" fill="#1B5E20" opacity="0.4" />

                    <g id="tractor-body">
                        <path fill="#263238" d="M50,140 L200,140 L200,155 L50,155 Z" />

                        <path fill="url(#tractorGreen)" d="M110,80 L210,85 L210,140 L100,140 L100,120 Z" />
                        <path stroke="#1B5E20" stroke-width="2"
                            d="M200,90 L200,135 M190,90 L190,135 M180,88 L180,138" />

                        <path fill="url(#tractorGreen)" d="M50,70 L110,70 L120,140 L50,140 Z" />
                        <path fill="#1B5E20" d="M45,65 L115,65 L115,72 L45,72 Z" />
                        <path fill="url(#windowReflect)" d="M60,78 L105,78 L108,120 L60,120 Z" />

                        <g fill="#3E2723">
                            <rect x="135" y="30" width="10" height="50" />
                            <rect x="132" y="25" width="16" height="5" rx="2" />
                        </g>

                        <g id="front-loader">
                            <path fill="#5D4037" stroke="#3E2723" stroke-width="4" d="M140,130 L230,110 L240,130" />
                            <path fill="#795548" d="M220,130 L255,130 L250,155 L225,155 Z" />
                            <path fill="#5D4037" d="M225,155 L250,155 L245,160 L230,160 Z" />
                        </g>
                    </g>

                    <g id="wheel-back" transform-origin="80 145">
                        <circle cx="80" cy="145" r="40" fill="#212121" stroke="#424242" stroke-width="2" />
                        <circle cx="80" cy="145" r="35" fill="none" stroke="#424242" stroke-width="4"
                            stroke-dasharray="10 5" />
                        <circle cx="80" cy="145" r="20" fill="#BDBDBD" />
                        <circle cx="80" cy="145" r="8" fill="#757575" />
                        <g stroke="#757575" stroke-width="3" stroke-linecap="round">
                            <line x1="80" y1="125" x2="80" y2="165" />
                            <line x1="60" y1="145" x2="100" y2="145" />
                            <line x1="66" y1="131" x2="94" y2="159" />
                            <line x1="66" y1="159" x2="94" y2="131" />
                        </g>
                    </g>

                    <g id="wheel-front" transform-origin="190 150">
                        <circle cx="190" cy="150" r="20" fill="#212121" stroke="#424242" stroke-width="2" />
                        <circle cx="190" cy="150" r="10" fill="#BDBDBD" />
                        <circle cx="190" cy="150" r="4" fill="#757575" />
                        <g stroke="#757575" stroke-width="2">
                            <line x1="190" y1="140" x2="190" y2="160" />
                            <line x1="180" y1="150" x2="200" y2="150" />
                        </g>
                    </g>
                </svg>
            </div>
        </div>

        <div class="mr-8 pop-up-element">
            <svg class="w-40 h-56 text-[#1B5E20] tree-sway-heavy origin-bottom drop-shadow-xl" viewBox="0 0 120 160"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="55" y="110" width="14" height="50" fill="#5D4037" rx="2" />
                <g fill="currentColor" id="tree3-leaves-group">
                    <circle cx="60" cy="70" r="50" fill="#2E7D32" />
                    <circle cx="35" cy="90" r="30" fill="#388E3C" />
                    <circle cx="85" cy="90" r="30" fill="#388E3C" />
                    <circle cx="60" cy="40" r="35" fill="#43A047" />
                    <circle cx="90" cy="60" r="25" fill="#43A047" />
                    <circle cx="30" cy="60" r="25" fill="#43A047" />
                </g>
            </svg>
        </div>
    </div>

    <!-- CURVED GLASS PANEL -->
    <div class="relative overflow-hidden">

        <!-- Glass Background -->


        <!-- Light Reflection -->
        <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
            <div class="absolute w-[600px] h-[300px] bg-white/10 blur-3xl 
                    rounded-full -top-32 -left-32 rotate-12">
            </div>
        </div>

        <!-- Content -->
        <div class="relative pt-20 pb-10 px-8 
                rounded-tr-[120px] 
                bg-[var(--brand-primary)]/70">

            <div class="grid mx-auto text-white gap-14 max-w-7xl md:grid-cols-4">

                <!-- COMPANY -->
                <div class="footer-column">
                    <h2 class="font-serif text-4xl font-semibold tracking-tight ">
                        {{ $company }}
                    </h2>

                    <p class="max-w-xs mt-4 text-sm leading-relaxed text-white/80">
                        {{ $tagline }}
                    </p>

                    <!-- SOCIAL -->
                    <div class="flex gap-5 mt-8 text-white/70">
                        <a href="#" class="transition hover:text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="transition hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="transition hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>

                <!-- PRODUCTS -->
                <div class="footer-column">
                    <h3 class="mb-5 text-xs font-bold tracking-[0.25em] uppercase text-white/60">
                        Products
                    </h3>
                    <ul class="space-y-3 text-sm text-white/80">
                        <li><a href="#" class="transition hover:text-white">Organic Pesticides</a></li>
                        <li><a href="#" class="transition hover:text-white">Soil Enhancers</a></li>
                        <li><a href="#" class="transition hover:text-white">Crop Nutrition</a></li>
                        <li><a href="#" class="transition hover:text-white">Bio Fertilizers</a></li>
                    </ul>
                </div>

                <!-- COMPANY -->
                <div class="footer-column">
                    <h3 class="mb-5 text-xs font-bold tracking-[0.25em] uppercase text-white/60">
                        Company
                    </h3>
                    <ul class="space-y-3 text-sm text-white/80">
                        <li><a href="#" class="transition hover:text-white">About Us</a></li>
                        <li><a href="#" class="transition hover:text-white">Research & Innovation</a></li>
                        <li><a href="#" class="transition hover:text-white">Careers</a></li>
                        <li><a href="#" class="transition hover:text-white">Sustainability</a></li>
                    </ul>
                </div>

                <!-- CONTACT -->
                <div class="footer-column">
                    <h3 class="mb-5 text-xs font-bold tracking-[0.25em] uppercase text-white/60">
                        Contact
                    </h3>
                    <ul class="space-y-3 text-sm text-white/80">
                        <li>info@agricultur.com</li>
                        <li>+91 98765 43210</li>
                        <li>India</li>
                    </ul>
                </div>

            </div>

            <!-- Bottom Bar -->
            <div class="pt-8 mt-16 text-xs tracking-[0.2em] text-center uppercase 
                    border-t border-white/20 text-white/50">
                © {{ date('Y') }} {{ $company }}. All rights reserved.
            </div>

        </div>
    </div>

</footer>







 --}}
