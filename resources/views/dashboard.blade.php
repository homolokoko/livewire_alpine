<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">

                        <div class="flex gap-3">
                            <x-nav-link :href="route('auth.category')" :active="request()->routeIs('auth.category')" wire:navigate>
                                {{ __('Category') }}
                            </x-nav-link>
                            <x-nav-link :href="route('auth.citizen.index')" :active="request()->routeIs('auth.citizen.index')" wire:navigate>
                                {{ __('Citizen') }}
                            </x-nav-link>
                        </div>

                        <div class="flex gap-3">
                            {{-- <x-setup.flatpickr></x-setup.flatpickr> --}}
                            {{-- <x-setup.slim-select></x-setup.slim-select> --}}
                            {{-- <x-setup.fuse></x-setup.fuse> --}}
                            {{-- <x-setup.checkbox></x-setup.checkbox> --}}
                            {{-- <x-text-input type="checkbox"></x-text-input> --}}
                            {{-- <x-setup.modal></x-setup.modal> --}}
                            {{-- <x-setup.radio-group></x-setup.radio-group> --}}
                            {{-- <x-setup.toast></x-setup.toast> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
