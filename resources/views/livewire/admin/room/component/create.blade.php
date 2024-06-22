<div>
    <span class="flex">
        <x-alpine.fullscreen-modal>
            <x-slot name="buttonTrigger">
                <x-alpine.tooltip>
                    <x-slot name="content" :position="'top'">
                        <x-heroicon.plus-sign></x-heroicon.plus-sign>
                    </x-slot>
                    <x-slot name="tooltipText"> {{ __('Create') }} </x-slot>
                </x-alpine.tooltip>
            </x-slot>
            <x-slot name="title">{{ __('modal.room.title') }}</x-slot>
            <x-slot name="content">
                <div x-data="{
                    saveFinish() {
                            $wire.saveFinish().then((res) => {})
                        },
                        saveContinue() {
                            $wire.saveContinue().then((res) => {})
                        }
                }" class="flex flex-col p-5 space-y-3 border-2 rounded-lg">
                    <x-input-label>
                        <x-slot name="label"> {{ __('No') }} </x-slot>
                        <x-slot name="model">no</x-slot>
                    </x-input-label>
                    <div class="flex flex-col bg-indigo-500 rounded-lg">
                        <div class="flex px-5 py-3 text-xs font-semibold text-white"><label
                                for="">{{ __('Shift') }}</label></div>
                        <div class="px-5 py-3">
                            <x-alpine.select2>
                                <x-slot name="model">shift</x-slot>
                                <x-slot name="list">shiftList</x-slot>
                                <x-slot name="placeholder">please selected a shift!</x-slot>
                            </x-alpine.select2>
                        </div>
                    </div>
                    <div class="">
                        <x-primary-button
                            @click="saveFinish">{{ __('button.save') . ' & ' . __('button.finish') }}</x-primary-button>
                        <x-primary-button
                            @click="saveContinue">{{ __('button.save') . ' & ' . __('button.continue') }}</x-primary-button>
                    </div>
                </div>
            </x-slot>
        </x-alpine.fullscreen-modal>
    </span>
</div>
