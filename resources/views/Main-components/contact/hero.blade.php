<!-- ICONS -->
<script src="https://unpkg.com/lucide@latest"></script>

<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<section class="overflow-hidden font-serif text-primary">


<!-- HERO -->
<section class="relative py-40 text-center text-white">

<div class="absolute inset-0 bg-center bg-cover"
style="background-image:url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=1600')"></div>

<div class="absolute inset-0 bg-black/40"></div>

<div class="relative z-10 max-w-3xl px-6 mx-auto">

<h1 class="mb-6 text-6xl font-bold hero-title">
Contact Us
</h1>

<p class="text-lg text-white/90">
Helping farmers and dealers across India.
</p>

</div>

</section>



<!-- CONTACT CARDS -->
<section class="py-24 bg-light">

<div class="max-w-6xl px-6 mx-auto">

<div class="grid gap-8 md:grid-cols-3">


<div class="p-8 text-center glass-card">

<i data-lucide="phone" class="mx-auto mb-4 w-7 h-7 text-brand"></i>

<h3 class="mb-2 font-bold">Phone</h3>

<p class="text-secondary">
+91 98765 43210
</p>

</div>


<div class="p-8 text-center glass-card">

<i data-lucide="mail" class="mx-auto mb-4 w-7 h-7 text-brand"></i>

<h3 class="mb-2 font-bold">Email</h3>

<p class="text-secondary">
support@abhayagro.in
</p>

</div>


<div class="p-8 text-center glass-card">

<i data-lucide="clock" class="mx-auto mb-4 w-7 h-7 text-brand"></i>

<h3 class="mb-2 font-bold">Working Hours</h3>

<p class="text-secondary">
Mon – Sat : 9AM – 6PM
</p>

</div>


</div>

</div>

</section>



<!-- CONTACT + MAP -->
<section class="py-24 bg-white">

<div class="grid gap-16 px-6 mx-auto max-w-7xl lg:grid-cols-2">


<!-- FORM -->
<div class="p-10 glass-card">

<h2 class="mb-8 text-3xl font-bold">
Send Inquiry
</h2>

<form class="space-y-6">


<input type="text"
placeholder="Full Name"
class="w-full p-3 border rounded-lg border-light bg-white/60 backdrop-blur">

<input type="tel"
placeholder="Phone"
class="w-full p-3 border rounded-lg border-light bg-white/60 backdrop-blur">

<input type="text"
placeholder="State"
class="w-full p-3 border rounded-lg border-light bg-white/60 backdrop-blur">

<textarea rows="4"
placeholder="Message"
class="w-full p-3 border rounded-lg border-light bg-white/60 backdrop-blur"></textarea>

<button
class="w-full py-3 font-semibold text-white rounded-lg bg-brand hover:bg-brand-dark">
Submit Inquiry
</button>

</form>

</div>


<!-- MAP -->
<div class="overflow-hidden glass-card">

<iframe
src="https://maps.google.com/maps?q=Delhi%20India&t=&z=11&ie=UTF8&iwloc=&output=embed"
class="w-full h-[450px] border-0">
</iframe>

</div>


</div>

</section>



<!-- OFFICES -->
<section class="py-24 bg-light">

<div class="px-6 mx-auto max-w-7xl">

<h2 class="mb-16 text-4xl font-bold text-center">
Our Offices
</h2>

<div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">


<div class="p-6 glass-card">

<i data-lucide="map-pin" class="w-6 h-6 mb-3 text-brand"></i>

<h3 class="mb-2 font-bold">Mumbai HQ</h3>

<p class="text-sm text-secondary">
Andheri East
</p>

</div>


<div class="p-6 glass-card">

<i data-lucide="map-pin" class="w-6 h-6 mb-3 text-brand"></i>

<h3 class="mb-2 font-bold">Delhi Office</h3>

<p class="text-sm text-secondary">
Connaught Place
</p>

</div>


<div class="p-6 glass-card">

<i data-lucide="map-pin" class="w-6 h-6 mb-3 text-brand"></i>

<h3 class="mb-2 font-bold">Pune Plant</h3>

<p class="text-sm text-secondary">
Chakan MIDC
</p>

</div>


<div class="p-6 glass-card">

<i data-lucide="map-pin" class="w-6 h-6 mb-3 text-brand"></i>

<h3 class="mb-2 font-bold">Nagpur Warehouse</h3>

<p class="text-sm text-secondary">
MIHAN Area
</p>

</div>


</div>

</div>

</section>


</section>



<style>

.glass-card{
background: rgba(255,255,255,0.55);
backdrop-filter: blur(14px);
border-radius: 18px;
border:1px solid rgba(255,255,255,0.35);
box-shadow:0 10px 30px rgba(0,0,0,0.08);
transition: all .35s;
}

.glass-card:hover{
transform: translateY(-6px);
box-shadow:0 20px 40px rgba(0,0,0,0.15);
}

</style>



<script>

lucide.createIcons()

gsap.registerPlugin(ScrollTrigger)


gsap.from(".hero-title",{
y:80,
opacity:0,
duration:1
})


gsap.utils.toArray("section").forEach(sec=>{
gsap.from(sec,{
opacity:0,
y:80,
duration:1,
scrollTrigger:{
trigger:sec,
start:"top 85%"
}
})
})

</script>