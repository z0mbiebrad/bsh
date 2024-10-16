<x-app-layout>
    <x-banner>
        <x-slot name="title">
            Best prices in town
        </x-slot>
        <x-slot name="body">
            Come on by and check us out! We have it all!
        </x-slot>
    </x-banner>


    <div class="block md:hidden">
        <!-- This div is only visible on mobile (small screens) -->
        <div class="relative isolate overflow-hidden">
            <div class="absolute inset-0 bg-gray-900 opacity-80 -z-10"></div>
            <img src="{{ asset('images/2024-09-18.jpg') }}" alt=""
                class="absolute inset-0 -z-20 h-full w-full object-cover object-left">
            <div class="my-5">

                <x-google.maps />

                <x-google.reviews />

                <x-about-us />

            </div>
        </div>
    </div>

    <div class="hidden md:block ">
        <!-- This div is visible on medium screens and larger (tablet, desktop, etc.) -->
        <div class="relative isolate overflow-hidden ">
            <div class="absolute inset-0 bg-gray-900 opacity-80 z-10"></div>
            <img src="{{ asset('images/2024-09-18.jpg') }}" alt=""
                class="absolute inset-0 -z-10 h-full w-full object-cover">
            <div class="flex justify-items-center justify-center my-10 z-20 space-x-2 max-w-5xl mx-auto">

                <x-google.reviews />

                <x-google.maps />

            </div>

            <x-about-us />
        </div>
    </div>

</x-app-layout>
