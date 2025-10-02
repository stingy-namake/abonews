<div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 flex max-w-full">
    <a href="#" class="w-52 h-52 flex-shrink-0 relative overflow-hidden">
        <img class="rounded-l-lg object-cover w-full h-full" src="{{ Storage::url($post->image)}}" alt="" />
        
        {{-- Gradient Overlay --}}
        {{-- <div class="absolute inset-0 bg-gradient-to-r from-transparent to-white dark:to-gray-800"></div>  --}}
    </a>
    <div class="p-5 flex-grow flex flex-col justify-between">
        <article>
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{ $post->title }}
                </h5>
            </a>
            <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{ Str::words($post->content, 15)}}
            </div>
        </article>
        <div class="flex justify-end">
            <a href="#">
                <x-primary-button>
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </x-primary-button>
            </a>
        </div>
    </div>
</div>