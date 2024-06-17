@props(['list','model'])
<div class="">
    <div x-data="{
        radioGroupSelectedValue: @entangle($model),
        radioGroupOptions: @entangle($list)
    }" class="space-y-3">
        <template x-for="(option, index) in radioGroupOptions" :key="index">
            <label @click="radioGroupSelectedValue=option.value" class="flex items-start p-5 space-x-3 bg-white border rounded-md shadow-sm hover:bg-gray-50 border-neutral-200/70">
                <input type="radio" name="radio-group" :value="option.value" class="text-gray-900 translate-y-px focus:ring-gray-700" />
                <span class="relative flex flex-col text-left space-y-1.5 leading-none">
                    <span x-text="option.text" class="font-semibold"></span>
                </span>
            </label>
        </template>
    </div>
</div>
