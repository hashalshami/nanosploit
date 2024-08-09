<x-app-layout>

    <div
        class="text-center p-5  leading-4 rounded-md text-gray-500 dark:text-gray-400  hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
        <h1 class="font-bold text-3xl">موقع كود برو</h1>
        <p>
            نحرص يوميًا على تحديث محتوانا بإضافة دروس تعليمية، مقالات متخصصة، كتب مفيدة، ومشاريع عملية تواكب أحدث
            التطورات، لضمان تزويدكم بكافة الموارد اللازمة لتعزيز مسيرتكم الأكاديمية والمهنية.
        </p>
    </div>
    <div class="flex justify-evenly px-3 items-start ">
        <x-card.tutorial name="HTML" img="img/HTML.webp" href="/hash">
            سنتعرف في هذهِ الدورة على أساسيات
            <span class="en">HTML</span> وعلى طريقة استخدامها في إنشاء صفحات
            الويب.
        </x-card.tutorial>

        <x-card.tutorial name="CSS" img="img/CSS.webp" :soon="true" />

       

</x-app-layout>
