@extends('layouts.app')

@section('content')
    <!-- Hero Section with Image and Gradient -->
    <div class="relative h-screen">
        <img src="https://imgs.search.brave.com/ko2Q7ZOGLlqvLvF_YRANMCfq0u33Z5RmFO9DCe4WCQw/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jZG4u/cHJvZC53ZWJzaXRl/LWZpbGVzLmNvbS81/YTllZTY0MTZlOTBk/MjAwMDFiMjAwMzgv/NjI4OWYwYmZhOTIw/YTk1OGYyYjQxNmY3/X2JsYWNrLWdyYWRp/ZW50LnBuZw" alt="Vítejte" class="object-cover w-full h-3/4">
        <div class="absolute inset-0 bg-gradient-to-b from-black to-transparent opacity-50"></div>
        <div class="flex items-center justify-center h-3/4 relative">
            <h1 class=" text-white text-5xl font-bold text-center z-10">Vítejte na naší stránce!</h1>
        </div>
    </div>
    <div>
    @livewire('gallery')
    </div>
     <!-- Why Choose Us Section -->
     <div class="py-10 text-center bg-gray-100">
        <h2 class="text-3xl font-semibold">Proč nakupovat u nás?</h2>
        <p class="mt-4 text-lg text-gray-700">Nabízíme nejlepší produkty za nejlepší ceny!</p>
        <div class="mx-5 flex justify-center space-y-4 sm:space-y-0 h-10 sm:space-x-6">
            <div class="bg-white shadow-md rounded-lg mx-5 max-w-xs">
                <h3 class="text-lg font-bold">Rychlá Doprava</h3>
                <x-heroicon-o-truck height="100px" />
                <p class="mt-2">Zaručujeme rychlé dodání vašich objednávek.</p>
            </div>
            <div class="bg-white shadow-md rounded-lg mx-5 max-w-xs">
                <h3 class="text-lg font-bold">Kvalitní Produkty</h3>
                <x-iconsax-bro-sidebar-right height="100px" margin="0"/>
                <p class="mt-2">Naše produkty procházejí důkladným výběrem kvality.</p>
            </div>
            <div class="bg-white shadow-md rounded-lg mx-5 max-w-xs">
                <h3 class="text-lg font-bold">Zákaznická Podpora</h3>
                <x-gmdi-support-agent-o height="100px" margin="0"/>
                <p class="mt-2">Jsme tu pro vás, abychom zodpověděli všechny vaše dotazy.</p>
            </div>
        </div>
    </div>


    <!-- Horizontal slider -->
    @include( 'components.product-slider')

    <!-- Contact Form Section -->
    @include('components.contact-form')

@endsection

@push('scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.mySwiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
            },
            loop: true, // Přidá loop efekt
        });
    </script>
@endpush