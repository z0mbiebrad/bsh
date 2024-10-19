@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Whoops! Something went wrong.</strong>
        <ul class="mt-3 list-disc list-inside text-sm">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('status'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{{ session('status') }}</span>
    </div>
@endif
<form action="{{ route('strain.update', $flower) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="space-y-12 max-w-5xl mx-auto">
        <div class="border-b border-white/10 pb-12">
            <h2 class="text-base mb-6 font-semibold leading-7 text-white">Edit: {{ $flower->strain }}</h2>
            <div class="space-y-6">
                <fieldset>
                    <label for="type" class="block text-sm font-medium leading-6 text-white">Type</label>
                    <div class="mt-1 space-x-2 flex items-center">
                        <div class="flex items-center gap-x-3">
                            <input value="indica" id="indica" name="type" type="radio"
                                class="h-4 w-4 border-white/10 bg-white/5 text-indigo-600 focus:ring-indigo-600 focus:ring-offset-gray-900"
                                @if ($flower->type == 'indica') checked @endif>
                            <label for="indica" class="block text-sm font-medium leading-6 text-white">Indica</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input value="sativa" id="sativa" name="type" type="radio"
                                class="h-4 w-4 border-white/10 bg-white/5 text-indigo-600 focus:ring-indigo-600 focus:ring-offset-gray-900"
                                @if ($flower->type == 'sativa') checked @endif>
                            <label for="sativa" class="block text-sm font-medium leading-6 text-white">Sativa</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input value="hybrid" id="hybrid" name="type" type="radio"
                                class="h-4 w-4 border-white/10 bg-white/5 text-indigo-600 focus:ring-indigo-600 focus:ring-offset-gray-900"
                                @if ($flower->type == 'hybrid') checked @endif>
                            <label for="hybrid" class="block text-sm font-medium leading-6 text-white">Hybrid</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <label for="quality" class="block text-sm font-medium leading-6 text-white">Quality</label>
                    <div class="mt-1 space-x-2 flex items-center">
                        <div class="flex items-center gap-x-3">
                            <input value="top-shelf" id="top-shelf" name="quality" type="radio"
                                class="h-4 w-4 border-white/10 bg-white/5 text-indigo-600 focus:ring-indigo-600 focus:ring-offset-gray-900"
                                @if ($flower->quality == 'top-shelf') checked @endif>
                            <label for="top-shelf" class="block text-sm font-medium leading-6 text-white">Top
                                Shelf</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input value="premium" id="premium" name="quality" type="radio"
                                class="h-4 w-4 border-white/10 bg-white/5 text-indigo-600 focus:ring-indigo-600 focus:ring-offset-gray-900"
                                @if ($flower->quality == 'premium') checked @endif>
                            <label for="premium" class="block text-sm font-medium leading-6 text-white">Premium</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input value="exotic" id="exotic" name="quality" type="radio"
                                class="h-4 w-4 border-white/10 bg-white/5 text-indigo-600 focus:ring-indigo-600 focus:ring-offset-gray-900"
                                @if ($flower->quality == 'exotic') checked @endif>
                            <label for="exotic" class="block text-sm font-medium leading-6 text-white">Exotic</label>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="mt-4">
                <div class="flex space-x-4">
                    <div class="w-2/3">
                        <label for="strain" class="block text-sm font-medium leading-6 text-white">Strain</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md bg-white/5 ring-1 ring-inset ring-white/10 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                                <input type="text" name="strain" id="strain" autocomplete="strain"
                                    class="flex-1 border-0 bg-transparent py-1.5 pl-1 text-white focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Blue Dream" value="{{ old('strain', $flower->strain) }}">
                            </div>
                        </div>
                    </div>
                    <div class="w-1/3">
                        <label for="percentage" class="block text-sm font-medium leading-6 text-white">THC-A %</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md bg-white/5 ring-1 ring-inset ring-white/10 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                                <input type="text" name="percentage" id="percentage" autocomplete="percentage"
                                    class="flex-1 border-0 bg-transparent py-1.5 pl-1 text-white focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="22" value="{{ old('percentage', intval($flower->thc_content)) }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-full">
                    <label for="cover-photo" class="block text-sm font-medium leading-6 text-white mt-4">Upload a
                        Photo</label>
                    <div class="mt-2 flex justify-center rounded-lg border border-dashed border-white/25 px-6 py-10">
                        <div class="text-center">
                            <label for="image_upload" class="cursor-pointer">
                                <svg class="mx-auto h-12 w-12 text-gray-500 hover:text-indigo-500" viewBox="0 0 24 24"
                                    fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </label>
                            <div class="mt-4 flex text-sm leading-6 text-gray-400">
                                <label for="image_upload"
                                    class="relative cursor-pointer rounded-md bg-gray-900 font-semibold text-white focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:ring-offset-gray-900 hover:text-indigo-500">
                                    <span>Upload a photo</span>
                                    <input id="image_upload" name="image_upload" type="file" class="sr-only"
                                        accept="image/*" />
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500 mt-1">PNG, JPG up to 2MB</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex mt-4 space-x-6">
                <fieldset>
                    <legend class="text-sm font-semibold leading-6 text-white">Out of stock?</legend>
                    <div class="mt-1 space-x-2 flex items-center">
                        <div class="flex items-center gap-x-3">
                            <input type="hidden" name="available" value="1">
                            <input id="out-of-stock" name="available" type="checkbox" value="0"
                                class="h-4 w-4 border-white/10 bg-white/5 text-indigo-600 focus:ring-indigo-600 focus:ring-offset-gray-900"
                                @if (!$flower->available) checked @endif>
                            <label for="out-of-stock" class="block text-sm font-medium leading-6 text-white">
                                <x-svg.cancel></x-svg.cancel>
                            </label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="inline-block rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm ring-1 ring-white/10 hover:ring-white/20">Save</button>
        </div>
    </div>
</form>
