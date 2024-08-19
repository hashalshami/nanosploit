<x-app-layout title=" العناصر في لغة HTML ">
    <x-shift />
    <x-h1>
       <x-slot name="term">HTML </x-slot>
        العناصر في لغة HTML 
    </x-h1>
     <h1>الوسوم في لغة <code class="en term">HTML</code></h1>
    <p style="display: none">
        تتكون كل صفحة من صفحات <code style="font-family: inherit">HTML</code> من
        مجموعة من العناصر
        <code style="font-family: inherit">Elements</code> يتـم إنشاؤها باستخدام
        الوسوم
        <code style="font-family: inherit">Tags</code>
    </p>
    <!-- العناصر -->

    <!--مفهوم الوسوم -->
    <article class="article">
        <h2>مفهوم الوسوم</h2>
        <p>
            الوسوم <code class="en term">Tags</code> عبارة عن احرف او
            كلمات تحمل معاني او وظيفة محددة بالنسبة لصفحة الويب.
            <br />
            تحصر الوسوم بين اقواس الزاوية
            <code class="mark fontcode">&lt;&gt;</code>
            وغالبا ما تكون عبارة عن اختصارات لكلمات انجليزية , فمثلاً الوسم
            <code class="mark under">
                &lt;<span class="tagname">p</span>&gt;
            </code>
            يستخدم لإنشاء العنصر المسؤول عن عرض فقرة نصوص
            <code class="en term">Paragraph</code> في صفحة الويب.
            <br />
            بحيث ان كل وسم يقوم بغرض معين سواء كان لعرض روابط او جداول او صور ...
            و غيرها من المهام التي سوف نتعلمها في الدروس القادمة بإذن الله.
        </p>
        <x-notice>
            لغة <code class="en">HTML</code> غير حساسة لحالة الأحرف بمعنى إذا كانت حالة الأحرف كبيرة أو
            صغيرة فلا يوجد فرق بينهما. <br />
            كمثال سواء قمت بكتابة
            <code class="font-code">
                &lt;<span class="tagname">html</span>&gt;
            </code>
            أو
            <code class="font-code">
                &lt;<span class="tagname">HTML</span>&gt;
            </code>
            فالنتيجة هي نفسها تماما.
        </x-notice>
        <p>
            <b>نصيحة </b> &colon; دائماً وابداً قم بكتابة عناصر
            <code class="en" translate="no">HTML</code> باللغة الإنجليزية بحالتها
            الصغيرة <code class="en" translate="no">Lower Case</code>.
        </p>
    </article>
    <!-- أنواع الوسوم -->
    <article class="article">
        <h2>أنواع الوسوم</h2>
        <p>
            جميع وسوم لغة <code class="en">HTML </code>تتكون من نوعان أساسيان من
            الوسوم وهي &colon;
        </p>
        <div class="section">
            <h3 class="dash">الوسم المزدوج &colon;</h3>
            <p>
                يتكون من وسم بداية
                <code class="en"><span>&lpar;Begin Tag&rpar;</span> , </code> ووسم
                نهاية <code class="en"><span>&lpar;End Tag&rpar;</span></code> ,يكون
                مابينهما المحتوى .
                <br />
                مثل الوسم الخاص لعرض فقرة نصوص كالتالي
                <code class="mark under">
                    &lt;<span class="tagname ">p</span>&gt; &lt;/<span class="tagname">p</span>&gt;
                </code>
                <br /><br />
            </p>
            <ul class="ul-mark">
                <li>
                    <b> وسم البداية </b>
                    &colon;
                    <code class="mark under">
                        &lt;<span class="tagname">p</span>&gt;</code><br />
                    يحتوي على اسم الوسم، موضوعًا داخل أقواس الزاوية
                    <span style="font-family: monospace;"> &lt;&gt; </span>,للإشارة الى بداية العنصر
                    .
                </li>
                <li>
                    <b> وسم النهاية </b>
                    &colon;
                    <code class="mark under">
                        &lt;&sol;<span class="tagname">p</span>&gt;</code>
                    <br />
                    يحتوي على اسم الوسم ، موضوعًا داخل القوسين
                    <span style="font-family: monospace;"> &lt;&gt; </span>
                    , مضافاً اليه العلامة <code class="en">Slash</code>
                    &dash;
                    <kbd class="mark">&sol;</kbd>
                    &nbsp; قبل اسم الوسم للإشارة إلى نهاية العنصر .
                    <br />
                    لاحظ أنَّ نسيان وسم النهاية قد يسبب أخطاءً في بعض الأحيان، لذا خذ
                    حذرك وتذكره.
                </li>
                <li>
                    <b> المحتوى </b>&colon; يمثل محتوى العنصر ,وهو الموجود بين وسمَي
                    البداية والنهاية.
                </li>
                <li>
                    <b> العنصر</b>&colon; هو الكيان ككل ويحتوي على وسم البداية و وسم
                    النهاية والمحتوى الموجود بينهما.
                </li>
            </ul>
        </div>
        <br />
        <div class="section">
            <h3 class="dash">الوسم المفرد &colon;</h3>
            <p>
                هو عبارة عن وسم يتم اضافتة بين الأقواس
                <code class="fontcode"> &lt;&gt; </code> متبوعا بالعلامة
                <code class="en">Slash</code>
                &dash;
                <code class="mark">&sol;</code>
                &nbsp; بعد اسم الوسم ,للإشارة أنه وسم مفرد .
                <br />
                مثل الوسم
                <code class="fontcode mark">
                    &lt;<span class="tagname">hr</span>&sol;&gt;
                </code>
                المسؤول عن إضافة خط افقي في الصفحة.
                <br />
                في الوسم المفرد يندمج وسما البداية والنهاية في وسم واحد ويسمى عنصر
                عديم المحتوى .
            </p>
            <br />
            <p class="info">
                <b> معلومة </b>
                عند استخدام الوسم المفرد يمكنك عدم كتابة الرمز
                <code class="en">Slash</code>

                <code class="mark">/</code>

                في اخره ان اردت. <br />
                كمثال سواء قمت بكتابة
                <code class="fontcode">
                    &lt;&sol;<span class="tagname">hr</span>&gt;
                </code>
                أو
                <code class="fontcode">
                    &lt;<span class="tagname">hr</span>&gt;
                </code>
                فالنتيجة مماثلة تماماً.
            </p>
        </div>

    </article>
    <!-- الشكل العام للعنصر في HTML  -->
    <article class="article">
        <h2>الشكل العام للعنصر في <code class="en">HTML</code></h2>
        <br />
        <table>
            <tr style="background-color: #1d2a35">
                <td>
                    <code class="fontcode">
                        &lt;<span class="tagname">tag</span>&sol;&gt;
                    </code>
                </td>
                <td>المحتوى</td>
                <td>
                    <code class="fontcode">
                        &lt;<span class="tagname">tag</span>&gt;
                    </code>
                </td>
            </tr>
            <tr style="background-color: #38444d">
                <td>
                    وسم النهاية &dash;

                    <b class="en">End Tag</b>
                </td>
                <td>المحتوى &dash; <code class="en bold">Content</code></td>
                <td>
                    وسم البداية &dash;

                    <code class="en bold">Begin Tag</code>
                </td>
            </tr>
        </table>
    </article>

<x-slot name="sidebar">
    @livewire('sidebar.html')
</x-slot>
</x-app-layout>
