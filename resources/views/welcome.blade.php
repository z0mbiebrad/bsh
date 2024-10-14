<x-app-layout>
    <div class="flex items-center gap-x-6 bg-gray-700 px-6 py-2.5 sm:px-3.5">
        <p class="text-sm leading-6 text-white flex flex-1 justify-center">
            <a href="#">
                <strong class="font-semibold">Best prices in town</strong><svg viewBox="0 0 2 2"
                    class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true">
                    <circle cx="1" cy="1" r="1" />
                </svg>Come on by and check us out! We have it all!&nbsp;<span aria-hidden="true">&rarr;</span>
            </a>
        </p>
    </div>
    <div class="relative isolate overflow-hidden bg-gray-900">
        <div class="absolute inset-0 bg-gray-900 opacity-80 z-10"></div>
        <img src="{{ asset('images/2024-09-18.jpg') }}" alt=""
            class="absolute inset-0 -z-10 h-full w-full object-cover">
        <div class="flex justify-items-center justify-center my-10 z-20 space-x-2">

            <x-google-reviews />

            <x-google-maps />


        </div>


        <div class="mx-auto max-w-7xl flex flex-col items-center mb-5">
            <div class="z-10 bg-gray-900/80 rounded-3xl max-w-5xl px-32 py-6">
                <div class="mx-auto max-w-2xl lg:mx-0 text-center z-20">
                    <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">About Us</h2>
                    <p class="mt-6 text-lg leading-8 text-white">Welcome to Biscoe Smoke House, your one-stop shop for
                        all things counter-culture in Biscoe, North Carolina! From THC-A, tobacco, and vapes to a wide
                        variety of accessories, we carry everything you could imagine. Whether you're looking for the
                        latest in alternative products or just something to relax with, we've got you covered. Stop by
                        and experience the best selection in town!</p>
                </div>
                <div class="flex justify-center gap-x-3 text-white">
                    <div class="overflow-hidden block bg-black/80 rounded-2xl">
                        <div class="px-4 py-5 sm:p-6">
                            <h3 class="text-lg font-semibold">Hours of Service</h3>
                            <p class="mt-2">
                                Monday - Friday: 7 AM - 10 PM<br>
                                Sunday: 10 PM - 10 PM
                            </p>
                        </div>
                    </div>
                    <div class="overflow-hidden block bg-black/80 rounded-2xl">
                        <div class="px-4 py-5 sm:p-6">
                            <h3 class="text-lg font-semibold">Contact Us</h3>
                            <p class="mt-2">
                                123456789<br>
                                123 Main St, Biscoe, NC 28512
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
