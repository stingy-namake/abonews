<x-app-layout>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    <div
                        class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                        <x-category-tabs />
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-4 py-4">
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