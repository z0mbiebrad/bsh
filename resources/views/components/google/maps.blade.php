<div class="block md:hidden mt-32">
    <div
        class="divide-y divide-gray-200 rounded-3xl text-white shadow w-11/12 mx-auto relative overflow-hidden">
        <img src="{{ asset('images/weed.jpg') }}" alt=""
            class="absolute inset-0 h-full w-full object-cover object-left z-[-1]">
        <div class="absolute inset-0 bg-black opacity-85 z-[-1]"></div>
        <div class="px-4 py-5 sm:px-6 flex justify-between items-baseline">
            <div class="flex items-center space-x-2">
                <img class="h-10" src="{{ asset('images/Google__G__logo.png') }}" alt="">
                <div>
                    <a
                        href="https://www.google.com/maps/place/BISCOE+SMOKE+HOUSE/@35.357699,-79.795603,16z/data=!4m6!3m5!1s0x88549905fdb434c9:0xf3cc969cd07ad16c!8m2!3d35.357699!4d-79.7956034!16s%2Fg%2F11b6vc5pxr?hl=en-US&entry=ttu&g_ep=EgoyMDI0MTAxNC4wIKXMDSoASAFQAw%3D%3D"><span
                            class="text-sm font-medium">SMOKE HOUSE</span></a>
                    <div class="flex items-center mt-1">
                        <x-svg.star />
                        4.7
                    </div>
                </div>
            </div>

            <div class="flex justify-items-center items-baseline">
                <div class="icon navigate-icon"></div>
                <div class="">
                    <x-svg.arrow />
                    <div id="map-link"></div>
                </div>
                </a>
            </div>
        </div>
    </div>

</div>
<div class="md:block hidden z-20">
    <div style="overflow:hidden;max-width:100%;width:500px;height:500px;">
        <div id="embed-map-canvas" style="height:100%; width:100%;max-width:100%;">
            <iframe style="height:100%;width:100%;border:0;" frameborder="0"
                src="https://www.google.com/maps/embed/v1/place?q=biscoe+smokehouse&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
            </iframe>
        </div>
        <a class="from-embedmap-code" href="https://kbj9qpmy.com/bp" id="get-data-for-map">
            Broadband Providers
        </a>
        <style>
            #embed-map-canvas .text-marker {}

            .map-generator {
                max-width: 100%;
                max-height: 100%;
                background: none;
            }
        </style>
    </div>
</div>

<script>
    // Function to detect the user's device
    function getMapLink() {
        const userAgent = navigator.userAgent || navigator.vendor || window.opera;

        // Define the address
        const address = "151+Montgomery+Crossing+Biscoe,+NC+27209";

        // Check if the user is on an iPhone or Android
        if (/iPhone|iPad|iPod/.test(userAgent)) {
            // iOS - Open Apple Maps
            return `<a aria-label="Get directions to this location on Apple Maps." target="_blank" href="http://maps.apple.com/?daddr=${address}">Directions</a>`;
        } else if (/android/i.test(userAgent)) {
            // Android - Open Google Maps
            return `<a aria-label="Get directions to this location on Google Maps." target="_blank" href="https://maps.google.com/?daddr=${address}">Directions</a>`;
        } else {
            // Fallback link (optional)
            return `<a aria-label="Get directions to this location on Google Maps." target="_blank" href="https://maps.google.com/?daddr=${address}">Directions</a>`;
        }
    }

    // Insert the correct link into the div
    document.getElementById('map-link').innerHTML = getMapLink();
</script>
