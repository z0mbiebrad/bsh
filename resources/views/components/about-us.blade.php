<div class="mx-auto max-w-7xl flex flex-col items-center my-5">
    <div class="container mx-auto sm:px-6 lg:px-8">
        <div class="md:flex justify-center gap-x-3 text-white">
            <div class="overflow-hidden block rounded-2xl">
                <div class="px-14 pb-14 sm:p-6">
                    <h3 class="text-xl font-semibold text-center underline">Hours of Service</h3>
                    <p class="my-2 text-center text">
                        Mon - Sat:<span class="font-bold"> 7 A.M. - 10 P.M.</span><br>
                        Sunday: <span class="font-bold"> 10 P.M. - 10 P.M.</span>
                    </p>
                    <div class="text-center">
                        <div class="flex items-center justify-center">
                            <svg class="h-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#ffffff"
                                    d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                            </svg>
                            <a href="tel:9108284218" class="underline ml-2">(910) 828-4218</a><br>
                        </div>
                        <div class="flex items-center justify-center">
                            <svg class="h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#ffffff"
                                    d="M16 144a144 144 0 1 1 288 0A144 144 0 1 1 16 144zM160 80c8.8 0 16-7.2 16-16s-7.2-16-16-16c-53 0-96 43-96 96c0 8.8 7.2 16 16 16s16-7.2 16-16c0-35.3 28.7-64 64-64zM128 480l0-162.9c10.4 1.9 21.1 2.9 32 2.9s21.6-1 32-2.9L192 480c0 17.7-14.3 32-32 32s-32-14.3-32-32z" />
                            </svg>
                            <div id="map-link"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
            return `<a aria-label="Get directions to this location on Apple Maps." target="_blank" href="http://maps.apple.com/?daddr=${address}">151 Montgomery Crossing</a>`;
        } else if (/android/i.test(userAgent)) {
            // Android - Open Google Maps
            return `<a aria-label="Get directions to this location on Google Maps." target="_blank" href="https://maps.google.com/?daddr=${address}">151 Montgomery Crossing</a>`;
        } else {
            // Fallback link (optional)
            return `<a aria-label="Get directions to this location on Google Maps." target="_blank" href="https://maps.google.com/?daddr=${address}">151 Montgomery Crossing</a>`;
        }
    }

    // Insert the correct link into the div
    document.getElementById('map-link').innerHTML = getMapLink();
</script>
