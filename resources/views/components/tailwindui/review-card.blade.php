<div class="flex space-x-4 text-sm bg-transparent">
    <div class="flex-1 px-10 py-10 bg-transparent">
        <h3 class="font-medium">{{ $author }}</h3>
        <p><time datetime="2021-07-16">{{ $date }}</time></p>

        <x-svg.stars></x-svg>

        <p class="sr-only">5 out of 5 stars</p>

        <div class="prose prose-sm mt-4 max-w-none bg-transparent">
            <p class="text-white">{{ $body }}</p>
        </div>
    </div>
</div>
