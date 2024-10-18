<x-app-layout>

    <x-tailwindui.hero>
    </x-tailwindui.hero>
    <div class="relative overflow-hidden">
        <img src="{{ asset('images/smoke.jpg') }}" alt=""
            class="absolute inset-0 h-full w-full object-none object-center z-[-1]">
        <div class="absolute inset-0 bg-stone-950 opacity-85 z-[-1]"></div>
        <x-tailwindui.review-card></x-tailwindui.review-card>
        <x-about-us></x-about-us>
        <x-thca-menu></x-thca-menu>
    </div>
</x-app-layout>