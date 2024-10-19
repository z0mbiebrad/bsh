<x-app-layout>
    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 my-4 mx-6">
        @foreach ($strains as $strain)
            <li
                class="col-span-1 flex flex-col divide-y divide-gray-200 rounded-lg bg-slate-800 text-center shadow mx-0">
                <div class="flex flex-1 flex-col p-3">
                    @auth
                        <div class="flex items-center mb-4 space-x-4 justify-end">
                            <form class="m-0" action="{{ route('strain.destroy', $strain->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this strain?');">
                                @csrf
                                @method('DELETE')
                                <button type="submut"
                                    class="rounded bg-red-50 px-2 py-1 text-sm font-semibold text-red-600 shadow-sm hover:bg-red-100 ring-red-200 ring-1">Delete</button>
                            </form>
                            <button type="button"
                                class="rounded bg-indigo-50 px-2 py-1 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100 ring-indigo-200 ring-1">
                                <a href="{{ route('strain.edit', $strain->id) }}">
                                    Edit
                                </a>
                            </button>
                        </div>
                    @endauth
                    <img class="mx-auto h-32 w-32 flex-shrink-0 rounded-lg" src="{{ asset($strain->image_url) }}"
                        alt="">
                    <h3 class="mt-6 text-sm font-medium text-gray-50">{{ $strain->strain }}</h3>
                    <dl class="mt-1 flex flex-grow flex-col justify-between">
                        <dd class="mt-2 mb-4">
                            <span
                                class="inline-flex items-center rounded-full bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">{{ intval($strain->thc_content) }}%
                                THC-A</span>
                        </dd>
                        <dt class="sr-only">Title</dt>
                        <dd class="text-sm text-gray-50">
                            <div class="flex items-center justify-center">
                                @if ($strain->available)
                                    <x-svg.check></x-svg.check>
                                    In Stock
                                @elseif (!$strain->available)
                                    <x-svg.x></x-svg.x>
                                    Out of Stock
                                @endif
                            </div>
                        </dd>
                    </dl>
                </div>
                <div>
                    <div class="-mt-px flex divide-x divide-gray-200">
                        <div class="flex w-0 flex-1">
                            <div
                                class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-50">
                                {{ ucwords($strain->quality) }}
                            </div>
                        </div>
                        <div class="-ml-px flex w-0 flex-1">
                            <div
                                class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-50">
                                {{ ucwords($strain->type) }}
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <!-- More people... -->
        @endforeach
    </ul>

</x-app-layout>
