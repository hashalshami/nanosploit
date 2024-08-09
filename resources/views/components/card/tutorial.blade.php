 @props([
     'name' => 'TEST',
     'soon' => false,
     'href' => '#',
     'img' => 'img/logo.png',
 ])

@php
$classes = ($soon ?? true)
            ? ''
            : '';
@endphp


 <div
     class=" opacity-90 w-[210px] bg-gradient-to-b from-gray-600 to-gray-800 rounded-[15px_0_15px_0] my-5  transition-all duration-500 shadow-[0_0_8px_2px_black] text-white">
     <a href="{{ $soon ? '#' : $href }}">
         <h2
             class="font-sans text-center bg-[#19c5c540] rounded-tl-[15px] rounded-tr-[0] rounded-br-[0] rounded-bl-[0] py-1 tracking-widest font-roboto font-bold text-[20px]">
             {{ $name }}</h2>
         <img src="{{ asset($img) }}" alt="{{ $name }}" class="w-full" />
         <p class="h-28 mt-1 px-2 py-1 text-center rounded-br-[15px] border-t {{
          $soon ? 
          'bg-black bg-opacity-70 mx-px mb-px flex items-center justify-center  border-gray-700' 
          :'bg-[rgba(67,141,141,0.162)]  font-normal leading-[25px]   border-gray-400   text-[16px] ' }}">

             {{ $soon ? 'قريبا...' : $slot }}
         </p>




     </a>
 </div>
