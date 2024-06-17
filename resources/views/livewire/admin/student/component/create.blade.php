<div>
    <div class="p-5 border rounded-md">
        <div x-data="{
            dob: null,
            name: null,
            submit() {
                this.$wire.submit();
            }
        }">
            <h2>Create</h2>
            <x-label>Name</x-label>
            <x-setup.input>
                <x-slot name="model">name</x-slot>
            </x-setup.input>
            <x-label>Date of birth</x-label>
            {{-- <x-alpine.date-picker>
                <x-slot name="model">dob</x-slot>
            </x-alpine.date-picker> --}}
            <x-setup.flatpickr>
                <x-slot name="model">dob</x-slot>
                {{-- <x-slot name="mode">multiple</x-slot> --}}
            </x-setup.flatpickr>
            <x-setup.radio-group>
                <x-slot name="model">gender</x-slot>
                <x-slot name="list">genders</x-slot>
            </x-setup.radio-group>
            <div class="p-3" @click="submit()">
                <x-primary-button>Submit</x-primary-button>
            </div>


        </div>
        <div>
        </div>
