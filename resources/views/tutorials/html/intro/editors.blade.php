<x-app-layout title="المحررات والأدوات المستخدمة">
    <x-shift :next="route('html.element')" :prev="route('html.overview')" />
    <x-h1>
       <x-slot name="term">HTML </x-slot>
       المحررات والأدوات المستخدمة 
    </x-h1>
    <x-article>
        {{-- <x-slot name="title"> مفهوم لغة <code class="font-en">HTML</code> </x-slot> --}}
        <x-h2 > مفهوم المحررات : </x-h2>
        <p>
            المحررات
            <code class="">&lpar;<span class="dark:text-white font-en">Editors</span>&rpar;</code> -
            هي أدوات تستخدم لتحرير وتصميم صفحات الويب , تتضمن محررات نصوص
            <code class="font-en">HTML</code> مجموعة واسعة من الخيارات والأدوات التي
            تسمح للمستخدمين بتحرير صفحات الويب بسهولة وسلاسة.
            <br />
            <br>
            إن استخدام محررات النصوص يساعد المطورين والمصممين على تحسين إنتاجيتهم
            وتوفير الوقت والجهد في تصميم وتحرير صفحات الويب.
        </p>
        <x-alert.info >
            امتداد الملفات لمستندات
            <code class="font-en">HTML</code> يكون
            <code class="text-tag-orange font-en" dir="ltr">&period;html</code> او
            <code class="text-tag-orange font-en" dir="ltr">&period;htm</code> لحفظ المستند كصفحة ويب
            وبالطبع لايوجد أي فرق بينهما.
        </x-alert.info>
    </x-article>
     <x-article>
        <x-h2>
            متصفح الويب
        </x-h2>
        <p>
            مستعرض الويب <code class=""> &lpar;<span class="dark:text-white font-en">Web Browser</span>&rpar; - </code> الهدف منه
            هو قراءة مستندات
            <code class=" font-en">HTML</code> وعرضها بشكل صحيح كـصفحة ويب.
            <br />
            ومن أمثلته :
            <codf class="font-en"> Google Chrome , FireFox , Internet Explorer </codf>.. وغيرها.
            <br />
           
        </p>
        <x-alert.info >
             لايقوم متصفح الويب بعرض عناصر <code class="font-en">HTML</code>
            في الصفحة مباشرة ولكنه
            يستخدمها لتحديد كيفية عرض المستند. </x-alert.info>
    </x-article>
      <!--   الأدوات المستخدمة في هذه الدورة : -->
    <x-article>
        <x-h2>الأدوات المستخدمة في هذه الدورة </x-h2>
        <p>في هذهِ الدورة سنقوم باستخدام بعض الأدوات والبرامج المساعدة في عملية كتابة وإنشاء صفحات الويب، وسنذكر فيما يلي
            أهم هذهِ الأدوات وعمل كل منها</p>
        <div class="mx-3 my-5">
            <x-h3>
             برنامج  <code class="font-en font-medium">Visual Studio Code </code>
            </x-h3>
            <p>
                هو محرر نصوص متقدم ، ومجاني , يدعم لغات
                <code class="font-en">HTML, CSS, JavaScript</code>
                ولغات اخرى.
                <br>
                يتميز بواجهة مستخدم مرنة وميزات قوية مثل تنسيق الألوان
                والإكمال التلقائي للكلمات ومعالجة الأخطاء وغيرها.
                <br />
                ويمكنك تحميل برنامج <span class="font-en"> VS Code</span> من موقعه الرسمي &colon; &nbsp;

                <a href="https://code.visualstudio.com/download" target="_blank" class="out-link">
                    من هنا <span> » </span></a>
            </p>
        </div>
        <div class="mx-3 my-5">
            <x-h3>
                متصفح <code class="font-en font-medium"> Google Chrome </code>
            </x-h3>
            <p>
                هو المتصفح الذي تم استخدامه في هذه الدورة, ويمكنك استبداله بأي متصفح
                حديث اذا اردت ذلك.
                <br />
                يمكنك تحميل متصفح <span class="en">Google Chrome</span> من موقعه
                الرسمي &colon; &nbsp;
                <a href="https://www.google.com/chrome/" target="_blank" class="out-link">
                    من هنا <span> » </span></a>
            </p>
        </div>
    </x-article>


<x-slot name="sidebar">
    @livewire('sidebar.html')
</x-slot>
</x-app-layout>
