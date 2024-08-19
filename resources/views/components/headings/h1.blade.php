<div>
    <h1 class="text-center text-2xl dark:text-gray-300 font-bold">
        @isset($term)
            <code class="block font-sans font-medium uppercase text-tag-termh">
                {{ $term }}
            </code>
        @endisset
        {{ $slot }}
    </h1>
</div>
