 @props([
     'prev' => '/',
     'next' => '/',
     'home' => false,
 ])
 @php
     $classes =
         'text-center inline-flex items-center justify-center w-32 rounded text-white font-medium  py-1.5  bg-emerald-900 hover:bg-emerald-800  text-lg gap-1';
 @endphp

 <div class="flex items-center justify-between flex-nowrap font-medium text-base py-4  px-5">
     <a href="{{ $prev }}" 
     class="text-center inline-flex items-center justify-center w-32  rounded text-white   bg-emerald-900 hover:bg-emerald-800  h-10  gap-1">
         <span class="font-en"> « </span>
         

         @if ($home)
             <span class=""> الرئيسية </span>
         @else
             <span class="">الدرس السابق</span>
         @endif
     </a>
     <a href="{{ $next }}"
     class="text-center inline-flex items-center justify-center w-32 rounded text-white    bg-emerald-900 hover:bg-emerald-800  h-10 gap-1">
         <span class="">الدرس التالي</span>
         <span class="font-en"> » </span>
     </a>
 </div>
