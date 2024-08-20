<x-app-layout title=" العناصر في لغة HTML ">
    <x-shift />
    <h1>
       <code class="term-lesson">HTML </code>
        هيكل الصفحة في <span class="font-en">HTML</span>
    </h1>
     
    <article >
        <h2>هيكل الصفحة</h2>
        <p>
            يعتبر هيكل الصفحة أحد العناصر الأساسية في تطوير صفحات الويب. <br>
            يساعد هيكل الصفحة على ترتيب وتنظيم المحتوى الموجود في صفحة الويب, ويعد أمر هام لضمان توافق الموقع مع معايير
            الويب وتحسين محركات البحث.
        </p>
    </article>
    <article >
        <h2>العناصر الأساسية لهيكل الصفحة </h2>
        <p>
            فيما يلي بعض العناصر الأساسية في هيكل الصفحة &colon;
        </p>
        <div class="pattern">
            <p>

            </p>
            <div class="exam">
                <div class="title-exam">
                    <h3>مثال</h3>
                </div>
                <div class="doc">
                    <div class="doc-head">
                        <div> html </div>
                        <button onclick="copyCode(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                            </svg>
                            <span>Copy code</span>
                        </button>
                    </div>
                    <div class="code-exam">
                        <pre><code>&lt;!<span class="tag">DOCTYPE</span> <span style="color: #d77a7a;">html</span>&gt;</code></pre>
                        <pre><code>&lt;<span class="tag">html</span>&gt;</code></pre>
                        <pre>  <code>&lt;<span class="tag">head</span>&gt;</code></pre>

                        <pre>     <code>&lt;<span class="tag">title</span>&gt;</code> Page Title <code>&lt;&sol;<span class="tag">title</span>&gt;</code></pre>
                        <pre>  <code>&lt;&sol;<span class="tag">head</span>&gt;</code></pre>
                        <!--  -->

                        <pre>  <code>&lt;<span class="tag">body</span>&gt;</code></pre>
                        <pre>    <code>&lt;<span class="tag">h1</span>&gt;</code> heading <code>&lt;&sol;<span class="tag">h1</span>&gt;</code></pre>
                        <pre>    <code>&lt;<span class="tag">p</span>&gt;</code> paragraph  <code>&lt;&sol;<span class="tag">p</span>&gt;</code></pre>
                        <pre> </pre>

                        <pre>  <code>&lt;&sol;<span class="tag">body</span>&gt;</code></pre>
                        <!--  -->
                        <pre><code>&lt;&sol;<span class="tag">html</span>&gt;</code></pre>

                    </div>
                </div>

            </div>
        </div>



        <div class="section">
            <ul class="ul-mark">
                <li> التعريف
                    <code class="mark">
                        &lt;!<span class="bluetag">DOCTYPE</span> <span class="tagname">html</span>&gt;
                    </code> &colon; <br>
                    هو تعريف يحدد نوع المستند , يقوم بإعلام المتصفح أنه يجب استخدام الإصدار <code
                        class="en">HTML5</code> لعرض الصفحة بشكل صحيح.
                    <br>
                    يجب وضعه كأول سطر في مستند <code class="en">HTML</code> قبل أي عناصر أخرى.
                </li>
                <li>
                    العنصر <code class="mark ">&lt;<span class="tagname">html</span>&gt;</code> &colon;<br>

                    هو العنصر الأساسي لأي صفحة ويب ,الذي يقوم بتحديد بداية ونهاية مستند <code class="en">HTML</code> .
                    <br>
                    يحتوي على جميع العناصر الأخرى في الصفحة, ويُعرف بــ العنصر الجذر.
                </li>
                <li>
                    العنصر <code class="mark">&lt;<span class="tagname">head</span>&gt;</code> &colon;<br>
                    يُعرف بــ العنصر الرأس ,
                    يحتوي هذا العنصر على المعلومات الوصفية للصفحة التي لا يتم عرضها مباشرة للمستخدم . <br>
                    مثل نوع ترميز الأحرف ,والروابط المستخدمة للتنسيق والتصميم، وغيرها من المعلومات الهامة التي سوف تتعلمها
                    لاحقاً.
                    <br>
                </li>
                <!-- title -->
                <li>
                    العنصر
                    <code class="mark  ">&lt;<span class="tagname">title</span>&gt;</code> &colon; <br>
                    يحتوى عنوان الصفحة الذي يظهر في علامة التبويب <code class="en">&lpar;tab&rpar;</code> للمتصفح .

                    <br>
                    ويتم وضعه داخل العنصر
                    <code class="mark1" style="color: inherit;">&lt;<span class="cadet">head</span>&gt;</code> .
                </li>
                <li>
                    العنصر <code class="mark fontcode">&lt;<span class="tagname">body</span>&gt;</code> &colon; <br>
                    يُعرف بعنصر جسم الصفحة ,يستخدم كحاوية لجميع المحتويات المرئية التي يتم كتابتها داخل الصفحة. <br>
                    وهو المسؤول عن المحتوى الرئيسي و شكل الصفحة النهائي الذي سيظهر في المتصفح ويراه المستخدم عند استعراض هذه
                    الصفحة. <br>
                    ويشمل ذلك النصوص، والصور، والروابط، والجداول، والنماذج، وغيرها.
                </li>
                <li>
                    <code class="mark ">&lt;<span class="tagname">h1</span>&gt;</code> &colon; يستخدم لوضع عنوان لمحتوى
                    الصفحة.
                </li>
                <li>
                    <code class="mark ">&lt;<span class="tagname">p</span>&gt;</code> &colon; يستخدم لوضع فقرة نصوص في
                    الصفحة.
                </li>
            </ul>

        </div>
    </article>


    <article >
        <h2>الشكل العام لهيكل الصفحة</h2>
        <p>الشكل التالي هو تصور توضيحي للهيكل و مناطق الصفحة الأساسية&colon;</p>
        <style>
            .structure {
                background-color: #24455f87 !important;
            }

            .structure,
            .structure div {
                --tagcolor: indianred;
                border: 1px solid rgba(128, 128, 128, 0.326);
                padding: 10px;
                margin: 20px;
                font-size: large;
                color: #ddd;
                border-radius: 4px;
            }

            .structure .rootpage {
                text-align: center;
                border-bottom: none;
                border-radius: 0;
                /* border-color: #678789ca; */
                border-color: transparent;
                margin-left: 5px;
                margin-right: 5px;
            }

            .structure code .en {
                color: var(--tagcolor);
            }

            .structure .pagesec {
                background-color: var(--bg-body);
            }

            .structure .pagesec code .en {
                color: #ff1867;
            }
        </style>
        <div class="section">
            <div class="structure" dir="ltr">
                <code class="fontcode">&lt;<code class="en">html</code>&gt;</code>
                <div class="rootpage">
                    <span dir="rtl">المنطقة الكاملة لمستند <code class="en">HTML</code> </span>
                </div>
                <!-- head -->
                <div class="pagesec">
                    <code class="fontcode">&lt;<code class="en">head</code>&gt;</code>
                    <div style="text-align: center;">
                        <span dir="rtl"> المعلومات الوصفية للصفحة </span>
                    </div>
                    <code class="fontcode">&lt;/<code class="en">head</code>&gt;</code>
                </div>
                <!-- body -->
                <div class="pagesec">
                    <code class="fontcode">&lt;<code class="en">body</code>&gt;</code>
                    <div style="text-align: center;">
                        <span dir="rtl"> المحتوى الرئيسي للصفحة </span>
                    </div>

                    <code class="fontcode">&lt;/<code class="en">body</code>&gt;</code>
                </div>
                <code class="fontcode">&lt;/<code class="en">html</code>&gt;</code>
            </div>
        </div>
        <br>


    </article>
<x-slot name="sidebar">
    @livewire('sidebar.html')
</x-slot>
</x-app-layout>
