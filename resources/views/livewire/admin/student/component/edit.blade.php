<div class="">
    <x-alpine.fullscreen-modal>
        <x-slot name="buttonTrigger">
            <button class="p-1 text-blue-700 rounded-md hover:bg-blue-700 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                  </svg>
                  
            </button>
        </x-slot>
        <x-slot name="title">
            <span>{{$name}}</span>
        </x-slot>
            <x-slot name="content">
                <div x-data="{
                        name : @entangle('name'),
                        dob : @entangle('dob'),
                        gender : @entangle('gender'),
                        file : @entangle('file'),
                        save(){
                            $wire.save();
                        },
                    }" class="block p-5 space-y-3 border rounded-lg">

                        <x-input-label>
                            <x-slot name="label">{{__('Name')}}</x-slot>
                            <x-slot name="model"> name </x-slot>
                        </x-input-label>

                        <x-input-label :type="'date'">
                            <x-slot name="label">{{__('Dob')}}</x-slot>
                            <x-slot name="model"> dob </x-slot>
                        </x-input-label>

                        <x-setup.radio-group>
                            <x-slot name="label">{{__('Gender')}}</x-slot>
                            <x-slot name="model">gender</x-slot>
                            <x-slot name="list">genders</x-slot>
                        </x-setup.radio-group>
                        
                        {{-- <x-file-upload>
                            <x-slot name="model">images</x-slot>
                            <x-slot name="multiple">false</x-slot>
                        </x-file-upload> --}}
                        
                        <x-setup.dropzone>
                            <x-slot name="relatedId"> relatedId </x-slot>
                        </x-setup.dropzone>
                        <x-button @click="save()">saves</x-button>
                </div>
            </x-slot>
    </x-alpine.fullscreen-modal>
</div>