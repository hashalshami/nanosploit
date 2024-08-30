 @props([
     'prev' => '/',
     'next' => '/',
     'home' => false,
 ])
 <div class="flex items-center justify-between flex-nowrap font-medium text-base py-4  px-5">
     <a class="shift group" href="{{ $prev }}" wire:navigate>
         <span class=" font-arial text-xl text-white transition duration-500 group-hover:translate-x-1"> &#171; </span>

         @if ($home)
             <span class=""> الصفحة الرئيسية </span>
         @else
             <span class="">الدرس السابق</span>
         @endif
     </a>

     <a class="shift group" href="{{ $next }}" wire:navigate>
         <span class="">الدرس التالي</span>
         <span class="font-arial text-xl text-white transition duration-500 group-hover:-translate-x-1"> &#187; </span>

     </a>
 </div>
