{{-- {{ $attributes->merge(['class' => '']) }}  --}}
<div class="rounded dark:bg-gray-800 my-5 p-4" >
   <x-icons.info class=" h-6 fill-gray-400 float-right mx-3 animate-bounce" />
   <p >
     {{ $slot }}
   </p>
</div>