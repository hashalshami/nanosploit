 @props([
     'prev' => '/',
     'next' => '/',
     'home' => false,
 ])
 <div class="flex items-center justify-between flex-nowrap font-medium text-base py-4  px-5">
     <a class="shift group" href="{{$prev}}" wire:navigate>
         <x-icons.backward class="h-3.5 transition group-hover:translate-x-1" />

         @if ($home)
             <span class=""> الرئيسية </span>
         @else
             <span class="">الدرس السابق</span>
         @endif
     </a>

     <a class="shift group" href="{{$next}}" wire:navigate>
         <span class="">الدرس التالي</span>
         <x-icons.forward class="h-3.5  transition ease-in-out duration-200 group-hover:-translate-x-1" />
     </a>
 </div>
