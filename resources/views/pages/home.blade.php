<x-app-layout>
    <x-slot:title>Welcome Home</x-slot>

    @include('main-components.home.HeroSection')

    @include('main-components.home.about')
    @include('main-components.home.services')
    @include('main-components.home.product')
    @include('main-components.home.faq')

</x-app-layout>