<div>
    <x-sidebar.contain title="مقدمة">
        <x-sidebar.link :href="route('html.overview')" :active="request()->routeIs('html.overview')" wire:navigate>
            <code class="font-sans">HTML - </code> نظرة عامة
        </x-sidebar.link>
        <x-sidebar.link :href="route('html.editors')" :active="request()->routeIs('html.editors')" wire:navigate>
            <code class="font-sans">HTML - </code> المحررات وبيئة العمل
        </x-sidebar.link>
    </x-sidebar.contain>

    <x-sidebar.contain title="الأساسيات">
        <x-sidebar.link :href="route('html.element')" :active="request()->routeIs('html.element')" wire:navigate>
            <code class="font-sans">HTML - </code> العناصر
        </x-sidebar.link>
        <x-sidebar.link :href="route('html.structure')" :active="request()->routeIs('html.structure')" wire:navigate>
            <code class="font-sans">HTML - </code> هيكل الصفحة
        </x-sidebar.link>
    </x-sidebar.contain>
</div>
