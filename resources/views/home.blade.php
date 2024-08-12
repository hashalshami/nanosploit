<x-app-layout :menu="false">
    <div
        class="text-center p-5  leading-4 rounded-md text-gray-500 dark:text-gray-400  hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
        <h1 class="font-bold text-3xl">موقع كود برو</h1>
        <p>
            نحرص يوميًا على تحديث محتوانا بإضافة دروس تعليمية، مقالات متخصصة، كتب مفيدة، ومشاريع عملية تواكب أحدث
            التطورات، لضمان تزويدكم بكافة الموارد اللازمة لتعزيز مسيرتكم الأكاديمية والمهنية.
        </p>
    </div>
    <div class="h-10 bg-slate-400 mx:bg-white"></div>

    <div class="flex flex-wrap items-center justify-center sm:justify-evenly px-3 ">
        <x-card.tutorial name="HTML" img="img/HTML.webp" :href="route('html.overview')">
            سنتعرف في هذهِ الدورة على أساسيات
            <span class="en">HTML</span> وعلى طريقة استخدامها في إنشاء صفحات
            الويب.
        </x-card.tutorial>

        <x-card.tutorial name="CSS" img="img/CSS.webp" :soon="true" />
    </div>



</x-app-layout>
