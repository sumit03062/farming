<x-app-layout>
    <x-slot:title>Welcome products</x-slot>

    @include('main-components.products.hero')
    @include('main-components.products.products')
    @include('main-components.products.services')
    @include('main-components.products.detail')
    @include('main-components.home.faq')

</x-app-layout>