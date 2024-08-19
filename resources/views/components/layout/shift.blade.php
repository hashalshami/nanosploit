 @props([
     'prev' => '/',
     'next' => '/',
     'home' => false,
 ])
 <div class="flex items-center justify-between flex-nowrap font-medium text-base py-4  px-5">
     <x-btn.shift-link href="{{$prev}}" wire:navigate>
         <x-icons.backward class="h-3.5" />

         @if ($home)
             <span class=""> الرئيسية </span>
         @else
             <span class="">الدرس السابق</span>
         @endif
     </x-btn.shift-link>

     <x-btn.shift-link href="{{$next}}" wire:navigate>
         <span class="">الدرس التالي</span>
         <x-icons.forward class="h-3.5" />
     </x-btn.shift-link>
 </div>
