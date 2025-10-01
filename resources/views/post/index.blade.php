<x-app-layout>
    <div>
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class=overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900 dark:text-gray-100">
                    <div
                        class="text-sm font-medium text-center text-gray-500 dark:text-gray-400 ">
                        <x-category-tabs />
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-6 py-6">
                @forelse ($posts as $p)
                    <x-post-item :post="$p">
                        <div class="text-center text-gray-400 dark:text-gray-600 py-12">No posts were found.</div>
                    </x-post-item>
                @empty
                    {{ $slot }}
                @endforelse
            </div>

            <div>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-app-layout>