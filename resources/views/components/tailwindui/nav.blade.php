 <header class="absolute inset-x-0 top-0 z-50">
     <nav class="flex items-center justify-center p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:hidden">
             <button id="open-menu" type="button"
                 class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
                 <span class="sr-only">Open main menu</span>
                 <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                     aria-hidden="true" data-slot="icon">
                     <path stroke-linecap="round" stroke-linejoin="round"
                         d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                 </svg>
             </button>
         </div>
         <div class="flex lg:flex-1">
             <a href="#" class="-m-1.5 p-1.5">
                 <p class="flex text-white items-center font-bold font-serif ml-2">BISCOE
                     <img src="{{ asset('images/weed (1).png') }}" alt="Arrow Icon" class="h-6 w-auto px-3 text-white">
                     SMOKE HOUSE
                 </p>
             </a>
         </div>
         <div class="hidden lg:flex lg:gap-x-12">
             <a href="#" class="text-sm font-semibold leading-6 text-white">HOME</a>
             <a href="#" class="text-sm font-semibold leading-6 text-white">THC-A</a>
         </div>
     </nav>
     <!-- Mobile menu, show/hide based on menu open state. -->
     <div id="mobile-menu" class="hidden lg:hidden" role="dialog" aria-modal="true">
         <!-- Background backdrop, show/hide based on slide-over state. -->
         <div class="fixed inset-0 z-50"></div>
         <div
             class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
             <div class="flex items-center justify-between">
                 <a href="#" class="-m-1.5 p-1.5">
                     <p class="flex text-white items-center font-bold font-serif">BISCOE
                         <img src="{{ asset('images/weed (1).png') }}" alt="Arrow Icon"
                             class="h-6 w-auto px-3 text-white">
                         SMOKE HOUSE
                     </p>
                 </a>
                 <button id="close-menu" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-400">
                     <span class="sr-only">Close menu</span>
                     <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         aria-hidden="true" data-slot="icon">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                     </svg>
                 </button>
             </div>
             <div class="mt-6 flow-root">
                 <div class="-my-6 divide-y divide-gray-500/25">
                     <div class="space-y-2 py-6">
                         <a href="#"
                             class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">HOME</a>
                             <a href="#"
                             class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">THC-A</a>
                     </div>
                 </div>
             </div> 
         </div>
     </div>
 </header>


 <script>
     const menuButton = document.getElementById('open-menu');
     const mobileMenu = document.getElementById('mobile-menu');
     const closeButton = document.getElementById('close-menu');

     menuButton.addEventListener('click', () => {
         mobileMenu.classList.toggle('hidden');
     });

     closeButton.addEventListener('click', () => {
         mobileMenu.classList.toggle('hidden');
     });
 </script>
