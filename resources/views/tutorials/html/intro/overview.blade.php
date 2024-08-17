<x-app-layout title="تعلم لغة HTML">
    <x-slot name="sidebar">
        {{-- <x-sidebar.html-aside /> --}}
        <livewire:sidebar.html-aside />
    </x-slot>

    <x-main.shift :home="true" />

    <x-main.h1>
        نظرة عامة عن لغة
        <x-tag.h-term>HTML</x-tag.h-term>
    </x-main.h1>
    <x-main.article>
        <x-slot name="title"> مفهوم لغة <code class="font-sans">HTML</code> </x-slot>
          <p>
            هي لغة تم تصميمها لإنشاء وتنسيق صفحات الويب, وهي تستخدم لتحديد الهيكل
            والمحتوى والعناصر المختلفة الموجودة على الصفحة .
            <br>
            ان <span class="term">HTML</span> هي اختصار لـ -
            <span class="text-nowrap">
                "<span class="en text-tag-orange/80">HyperText Markup Language</span>"
            </span>
            والتي تعني بترجمة غير حرفية
            <span class="text-nowrap"> (</span>لغة الترميز القياسية لصفحات الويب<span>)
            </span>
            .
            <br>
            وهي ليست لغة برمجية - بل هي لغة وصفية -
            <span class="text-nowrap">" <span class="term">Markup Language</span> "</span>
            ,تستخدم لتنظيم وعرض المحتوى على شبكة الإنترنت.
        </p>
    </x-main.article>
    


</x-app-layout>
