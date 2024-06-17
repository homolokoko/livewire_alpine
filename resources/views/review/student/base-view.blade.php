<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Review.student.header') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
                <div class="w-full p-5 rounded-lg">

                    @livewire('review.student.table', key('review.student.table'))

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
