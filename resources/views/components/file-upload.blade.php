@props(['model','multiple'=>false])
<div>
        <input type="file" wire:model="{{$model}}" {!! $attributes->merge(['class' => 'px-5 py-4 border-indigo-300 dark:border-indigo-700 dark:bg-indigo-900 dark:text-indigo-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full']) !!}>
        {{-- <div class="p-3 overflow-auto bg-scroll border rounded-lg max-h-80">
            {{ $slot }}
        </div> --}}
</div>