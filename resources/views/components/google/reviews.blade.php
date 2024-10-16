<style>
    .carousel {
        display: flex;
        transition: opacity 0.5s ease-in-out;
        position: relative;
    }

    .carousel>div {
        opacity: 0;
        position: absolute;
        transition: opacity 0.5s ease-in-out;
        width: 100%;
    }

    .carousel>div.active {
        opacity: 1;
        position: relative;
    }
</style>
<div class="md:hidden block">
    <div class="relative mx-auto overflow-hidden w-11/12">
        <!-- Carousel Wrapper -->
        <div class="carousel">
            <!-- Slide 1 -->
            <div class="w-full flex-shrink-0 active">
                <x-google.review-card>
                    <x-slot name="review">
                        Very helpful and courteous place... products are exactly as they tell you... we've never had any
                        problems here.. Great place check it out...Y'all will love this place like my husband and I
                        do...happy smokes and enjoy your day
                    </x-slot>
                    <x-slot name="url">
                        https://www.google.com/maps/contrib/115281289418429710534/reviews/@35.2127016,-79.3793104,10z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en&entry=ttu&g_ep=EgoyMDI0MTAwOS4wIKXMDSoASAFQAw%3D%3D
                    </x-slot>
                </x-google.review-card>
            </div>
            <!-- Slide 2 -->
            <div class="w-full flex-shrink-0">
                <x-google.review-card>
                    <x-slot name="review">
                        The Smoke House is a great place to get your fix whether it's Nicotine or THC. The new owner is
                        very
                        knowledgeable and kind and was able to help with any doubts I had. The prices were fair and
                        their
                        products are quality. I would easily recommend this place. 5 stars
                    </x-slot>
                    <x-slot name="url">
                        https://www.google.com/maps/contrib/114840014936561534672/place/ChIJyTS0_QWZVIgRbNF60JyWzPM/@35.6922417,-79.9895254,10z/data=!4m6!1m5!8m4!1e1!2s114840014936561534672!3m1!1e1?hl=en&entry=ttu&g_ep=EgoyMDI0MTAwOS4wIKXMDSoASAFQAw%3D%3D
                    </x-slot>
                </x-google.review-card>
            </div>
            <!-- Slide 3 -->
            <div class="w-full flex-shrink-0">
                <x-google.review-card>
                    <x-slot name="review">
                        Best place for all your tobacco, vapes and accessories! Owner & staff are so helpful! Go check
                        them
                        out!
                    </x-slot>
                    <x-slot name="url">
                        https://www.google.com/maps/contrib/111609402472409894766/place/ChIJyTS0_QWZVIgRbNF60JyWzPM/@35.6705491,-81.0049454,8z/data=!4m6!1m5!8m4!1e1!2s111609402472409894766!3m1!1e1?hl=en&entry=ttu&g_ep=EgoyMDI0MTAwOS4wIKXMDSoASAFQAw%3D%3D
                    </x-slot>
                </x-google.review-card>
            </div>
        </div>
    </div>
</div>
<div class="hidden md:block space-y-4 z-20">
    <x-google.review-card>
        <x-slot name="review">
            Very helpful and courteous place... products are exactly as they tell you... we've never had any
            problems here.. Great place check it out...Y'all will love this place like my husband and I
            do...happy smokes and enjoy your day
        </x-slot>
        <x-slot name="url">
            https://www.google.com/maps/contrib/115281289418429710534/reviews/@35.2127016,-79.3793104,10z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en&entry=ttu&g_ep=EgoyMDI0MTAwOS4wIKXMDSoASAFQAw%3D%3D
        </x-slot>
    </x-google.review-card>
    <x-google.review-card>
        <x-slot name="review">
            The Smoke House is a great place to get your fix whether it's Nicotine or THC. The new owner is
            very
            knowledgeable and kind and was able to help with any doubts I had. The prices were fair and
            their
            products are quality. I would easily recommend this place. 5 stars
        </x-slot>
        <x-slot name="url">
            https://www.google.com/maps/contrib/114840014936561534672/place/ChIJyTS0_QWZVIgRbNF60JyWzPM/@35.6922417,-79.9895254,10z/data=!4m6!1m5!8m4!1e1!2s114840014936561534672!3m1!1e1?hl=en&entry=ttu&g_ep=EgoyMDI0MTAwOS4wIKXMDSoASAFQAw%3D%3D
        </x-slot>
    </x-google.review-card>
    <x-google.review-card>
        <x-slot name="review">
            Best place for all your tobacco, vapes and accessories! Owner & staff are so helpful! Go check
            them
            out!
        </x-slot>
        <x-slot name="url">
            https://www.google.com/maps/contrib/111609402472409894766/place/ChIJyTS0_QWZVIgRbNF60JyWzPM/@35.6705491,-81.0049454,8z/data=!4m6!1m5!8m4!1e1!2s111609402472409894766!3m1!1e1?hl=en&entry=ttu&g_ep=EgoyMDI0MTAwOS4wIKXMDSoASAFQAw%3D%3D
        </x-slot>
    </x-google.review-card>
</div>


<script>
    const carousel = document.querySelector('.carousel');
    const slides = document.querySelectorAll('.carousel > div');
    const playPauseButton = document.getElementById('playPauseButton');
    let currentIndex = 0;
    let startX = 0;
    let endX = 0;
    let autoplayInterval;
    let isAutoplayActive = true;

    // Function to show a specific slide with fade effect
    function showSlide(index) {
        slides.forEach((slide, idx) => {
            if (idx === index) {
                slide.classList.add('active');
            } else {
                slide.classList.remove('active');
            }
        });
    }

    // Function to move to the next slide
    function showNextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    // Function to move to the previous slide
    function showPrevSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    }

    // Add event listeners for swipe gestures
    carousel.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
        clearAutoplay(); // Pause autoplay on user interaction
    });

    carousel.addEventListener('touchend', (e) => {
        endX = e.changedTouches[0].clientX;
        handleSwipe();
    });

    // Function to handle swipe gestures
    function handleSwipe() {
        if (startX - endX > 50) {
            showNextSlide(); // Swipe left
        }
        if (endX - startX > 50) {
            showPrevSlide(); // Swipe right
        }
        startAutoplay(); // Resume autoplay after swipe
    }

    // Autoplay functionality
    function startAutoplay() {
        if (isAutoplayActive) {
            autoplayInterval = setInterval(showNextSlide, 5000); // Change slide every 5 seconds
        }
    }

    function clearAutoplay() {
        clearInterval(autoplayInterval);
    }

    // Initialize the carousel
    showSlide(currentIndex);
    startAutoplay();
</script>
