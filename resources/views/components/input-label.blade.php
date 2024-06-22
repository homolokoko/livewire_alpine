@props(['label', 'model', 'type' => 'text'])
<div x-data="{ model: @entangle($model) }" class="flex flex-col bg-indigo-500 rounded-lg">
    <div class="flex px-5 py-3 text-xs font-semibold text-white"><label for="">{{ $label }}</label></div>
    <div class="px-5 py-3">
        <input type="{{ $type }}" x-model="model" x-mask="999" {!! $attributes->merge([
            'class' =>
                'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full',
        ]) !!}>
    </div>

</div>
