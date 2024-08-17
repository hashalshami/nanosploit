@props(['title'=>'title'])
<div class="py-4 overflow-y-auto">
    <h2 class="pr-2 text-2xl font-bold text-gray-500 uppercase dark:text-gray-200">{{$title}}</h2>

    <ul class="font-medium  ">
        {{$slot}}
    </ul>
</div>
