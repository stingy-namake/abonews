<ul class="flex flex-wrap -mb-px">
    <li class="me-2">
        <a href="#"
            class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500"
            aria-current="page">{{ 'All' }}</a>
    </li>
    @foreach ($categories as $category)
        <li class="me-2">
            <a href="#"
                class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">
                {{ $category->name }} </a>
        </li>
    @endforeach
</ul>