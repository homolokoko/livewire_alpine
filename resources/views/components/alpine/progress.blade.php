{{-- <div wire:loading x-data="{
    progress: 0,
    progressInterval: null,
}"
x-init="
    progressInterval = setInterval(() => {
        progress = progress + 1;
        if (progress >= 100) {
            clearInterval(progressInterval);
        }
    }, 100);
"
class="fixed top-0 w-full h-2 overflow-hidden bg-gray-100 rounded-full">
<span :style="'width:' + progress + '%'" class="absolute w-24 h-full duration-300 bg-blue-600 ease"></span>
</div> --}}

<div class="">
    <div class="" wire:loading>Loading ...</div>
</div>