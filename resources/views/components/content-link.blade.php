@props(['title','route','svg'])

<div class="flex flex-col gap-3">
    <a wire:navigate href="{{ $route }}"
        class=" p-12 border rounded hover:shadow-md hover:shadow-blue-400">
        {{$svg}}


</a><span class="text-xs font-semibold text-gray-400 uppercase ">{{$title}}</span>
    
</div>