<nav class="bg-gray-800 -z-20">
    <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-8">
        <div class="relative flex h-20 items-center justify-between">
            <div class="block md:hidden">
                  <div class="flex-shrink-0 z-10">
                <img class="h-40 w-auto -z-10" src="{{ asset('images/22bsh.png') }}" alt="Your Company">
            </div>
            </div>
            <div class="md:block hidden">
                  <div class="flex-shrink-0 z-10">
                <img class="h-40 w-auto -z-10" src="{{ asset('images/bsh1.png') }}" alt="Your Company">
            </div>
            </div>
          
            <div class="hidden lg:ml-6 lg:block">
                <div class="flex space-x-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Home</a>
                    <a href="#"
                        class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">THC-A</a>
                    <a href="#"
                        class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Tobacco</a>
                    <a href="#"
                        class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Vape</a>
                </div>
            </div>

            <div class="flex lg:hidden">
                <button type="button"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Home</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">THC-A</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Tobacco</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Vape</a>
        </div>
    </div>
</nav>


<script>
    // Toggle mobile menu
    const mobileMenuButton = document.querySelector('button[aria-controls="mobile-menu"]');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
        mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
        mobileMenu.classList.toggle('hidden');
    });

    // Close the dropdown if clicked outside
    document.addEventListener('click', (event) => {
        if (!mobileMenuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
            mobileMenu.classList.add('hidden');
            mobileMenuButton.setAttribute('aria-expanded', 'false');
        }
    });
</script>
