<div class="block md:hidden">
    <div class="divide-y divide-gray-200 overflow-hidden rounded-lg bg-gray-900 text-white shadow w-11/12 mb-4 mx-auto">
        <div class="px-4 py-5 sm:px-6 flex justify-between items-baseline">
            <div class="flex items-center space-x-2">
                <img class="h-10" src="{{ asset('images/Google__G__logo.png') }}" alt="">
                <div>
                    <a
                        href="https://maps.app.goo.gl/CsTH83MEpAB483Cw5?g_st=im"><span
                            class="text-sm font-medium">SMOKE HOUSE</span></a>
                    <div class="flex items-center mt-1">
                        <x-svg.star />
                        4.7
                    </div>
                </div>
            </div>
            <div class="flex justify-items-center">
                <a aria-label="Get directions to this location on Google Maps." target="_blank"
                    href="https://maps.app.goo.gl/CsTH83MEpAB483Cw5?g_st=im">
                    <div class="icon navigate-icon"></div>
                    <div class="navigate-text">
                        <x-svg.arrow />
                        Directions
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
