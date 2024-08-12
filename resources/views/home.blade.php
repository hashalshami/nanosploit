<x-app-layout :menu="false">
    <div
        class="text-center p-5  leading-4 rounded-md text-gray-500 dark:text-gray-400  hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
        <h1 class="font-bold text-3xl">موقع كود برو</h1>
        <p>
            نحرص يوميًا على تحديث محتوانا بإضافة دروس تعليمية، مقالات متخصصة، كتب مفيدة، ومشاريع عملية تواكب أحدث
            التطورات، لضمان تزويدكم بكافة الموارد اللازمة لتعزيز مسيرتكم الأكاديمية والمهنية.
        </p>
    </div>

    <div class="flex flex-wrap items-center justify-center sm:justify-evenly px-3 ">

        <div
            class=" opacity-90 w-[210px] bg-gradient-to-b from-gray-600 to-gray-800 rounded-[15px_0_15px_0] my-5  transition-all duration-500 shadow-[0_0_8px_2px_black] text-white">
            <a href="{{ route('html.overview') }}">
                <h2
                    class="font-sans text-center bg-[#19c5c540] rounded-tl-[15px] rounded-tr-[0] rounded-br-[0] rounded-bl-[0] py-1 tracking-widest font-roboto font-bold text-[20px]">
                    HTML</h2>
                <img src="{{ asset('img/HTML.webp') }}" alt="HTML" class="w-full" />
                <p
                    class="h-28 mt-1 px-2 py-1 text-center rounded-br-[15px] border-t bg-[rgba(67,141,141,0.162)]  font-normal leading-[25px]   border-gray-400   text-[16px] 
         ">

                    سنتعرف في هذهِ الدورة على أساسيات
                    <span class="en">HTML</span> وعلى طريقة استخدامها في إنشاء صفحات
                    الويب.
                </p>


            </a>
        </div>

        <div
            class=" opacity-90 w-[210px] bg-gradient-to-b from-gray-600 to-gray-800 rounded-[15px_0_15px_0] my-5  transition-all duration-500 shadow-[0_0_8px_2px_black] text-white">
            <a href="#">
                <h2
                    class="font-sans text-center bg-[#19c5c540] rounded-tl-[15px] rounded-tr-[0] rounded-br-[0] rounded-bl-[0] py-1 tracking-widest font-roboto font-bold text-[20px]">
                    CSS</h2>
                <img src="{{ asset('img/CSS.webp') }}" alt="CSS" class="w-full" />
                <p
                    class="h-28 mt-1 px-2 py-1 text-center rounded-br-[15px] border-t bg-black bg-opacity-70 mx-px mb-px flex items-center justify-center  border-gray-700
         ">

                    قريبا...
                </p>


            </a>
        </div>
    </div>



</x-app-layout>
