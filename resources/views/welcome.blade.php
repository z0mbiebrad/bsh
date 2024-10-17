<x-app-layout>
    <x-tailwindui.hero>
    </x-tailwindui.hero>
    <div class="relative overflow-hidden">
        <img src="{{ asset('images/smoke.jpg') }}" alt=""
            class="absolute inset-0 h-full w-full object-cover object-center z-[-1]">
        <div class="absolute inset-0 bg-stone-950 opacity-80 z-[-1]"></div>
        <x-tailwindui.review-card></x-tailwindui.review-card>
        <x-google.maps></x-google>
    </div>
</x-app-layout>
