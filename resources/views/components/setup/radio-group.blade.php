@props(['label','model','list'])
<div class="flex flex-col p-5 space-y-4 bg-indigo-500 rounded-lg">
    <div class="flex text-xs font-semibold text-white"><label for="">{{$label}}</label></div>
    <div x-data="{
        radioGroupSelectedValue: @entangle($model),
        radioGroupOptions: @entangle($list)
    }" class="flex flex-wrap gap-3 px-3 py-3 bg-white rounded-md">
        <template x-for="(option, index) in radioGroupOptions" :key="index">
            <label @click="radioGroupSelectedValue=option.value" 
            :class="{'border-2 border-indigo-500':radioGroupSelectedValue==option.value}"
            class="flex items-center px-4 py-1.5 space-x-3 bg-white border rounded-md shadow-sm hover:bg-gray-50">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                :class="radioGroupSelectedValue==option.value ? 'text-green-500': ' text-gray-200 '"
                class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span x-text="option.text" class="font-semibold"></span>
            </label>
        </template>
    </div>
</div>
