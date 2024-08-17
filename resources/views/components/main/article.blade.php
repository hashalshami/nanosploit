@props(['title'=>''])
<div class="py-5 m-5">
    <h2 class="font-bold text-2xl"> {{$title}} </h2>
    {{$slot}}
</div>