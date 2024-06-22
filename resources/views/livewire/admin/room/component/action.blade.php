<div>
    <span class="flex">

        <x-alpine.simple-modal>
            <x-slot name="buttonTrigger">
                <x-alpine.tooltip :position="'left'">
                    <x-slot name="content">
                        <x-heroicon.eye-open></x-heroicon.eye-open>
                    </x-slot>
                    <x-slot name="tooltipText"> {{ __('View') }} </x-slot>
                </x-alpine.tooltip>
            </x-slot>
            <x-slot name="title">{{ __('modal.room.title') }}</x-slot>
            <x-slot name="content">
                <p>I am room content</p>
                <x-primary-button><span wire:click="delete">{{ __('button.accept') }}</span></x-primary-button>
            </x-slot>
        </x-alpine.simple-modal>



        <x-alpine.fullscreen-modal>
            <x-slot name="buttonTrigger">
                <x-alpine.tooltip :position="'bottom'">
                    <x-slot name="content">
                        <x-heroicon.pencil-square></x-heroicon.pencil-square>
                    </x-slot>
                    <x-slot name="tooltipText"> {{ __('Edit') }} </x-slot>
                </x-alpine.tooltip>
            </x-slot>
            <x-slot name="title">{{ __('modal.room.title') }}</x-slot>
            <x-slot name="content">
                <div x-data="{
                    no: @entangle('no'),
                    modifyFinish() {
                        $wire.modifyFinish().then((res) => {

                        })
                    },
                    modifyContinue() {
                        $wire.modifyContinue().then((res) => {

                        })
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
                            @click="modifyFinish">{{ __('button.update') . ' & ' . __('button.finish') }}</x-primary-button>
                        <x-primary-button
                            @click="modifyContinue">{{ __('button.update') . ' & ' . __('button.continue') }}</x-primary-button>
                    </div>
                </div>
            </x-slot>
        </x-alpine.fullscreen-modal>


        <x-alpine.simple-modal>
            <x-slot name="buttonTrigger">
                <x-alpine.tooltip :position="'right'">
                    <x-slot name="content">
                        <x-heroicon.trash-can></x-heroicon.trash-can>
                    </x-slot>
                    <x-slot name="tooltipText"> {{ __('Delete') }} </x-slot>
                </x-alpine.tooltip>
            </x-slot>
            <x-slot name="title">{{ __('modal.room.title') }}</x-slot>
            <x-slot name="content">
                <div x-data="{
                    no: @entangle('no'),
                    removeFinish() {
                        $wire.removeFinish().then((res) => {})
                    },
                    removeContinue() {
                        $wire.removeContinue().then((res) => {})
                    }
                }" class="flex flex-col p-5 space-y-3 border-2 rounded-lg">
                    <div class="flex flex-col bg-indigo-500 rounded-lg">
                        <div class="flex px-5 py-3 text-xs font-semibold text-white"><label
                                for="">{{ __('Shift') }}</label></div>
                        <div class="px-5 py-3">
                            <p class="px-4 py-2.5 rounded-md bg-red-100 text-red-600">
                                Are you sure, to delete this it can not be revert later!</p>
                        </div>
                    </div>
                    <div class="">
                        <x-primary-button
                            @click="removeFinish">{{ __('button.delete') . ' & ' . __('button.finish') }}</x-primary-button>
                        <x-primary-button
                            @click="removeContinue">{{ __('button.update') . ' & ' . __('button.continue') }}</x-primary-button>
                    </div>
                </div>
            </x-slot>
        </x-alpine.simple-modal>

    </span>
</div>
