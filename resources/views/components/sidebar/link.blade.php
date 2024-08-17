@props(['active'])

@php
    $x = 'block py-1 pr-5 whitespace-nowrap  ';
    $classes = ($active ?? false) 
    ? ' bg-emerald-800 hover:bg-emerald-700 dark:text-white  ' 
    : ' hover:bg-gray-100 dark:hover:bg-gray-700 ';
    $x.=$classes;
@endphp

<li>
    <a {{ $attributes->merge(['class' => $x]) }}>
        {{ $slot }}
    </a>
</li>
