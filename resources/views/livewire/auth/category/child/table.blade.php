<div wire:ignore>

    <div class="">
        <div class="relative overflow-x-auto p-7 border rounded-lg" x-data="{
            thead: @js($columns),
            tbody: @js($datatable),
        }">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-indigo-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <template x-for="(th, index) in thead">
                            <th scope="col" class="px-6 py-3">
                                <span x-text="th"></span>
                            </th>
                        </template>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="(td, index) in tbody">
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <span x-text="td.id"></span>
                            </th>
                            <td class="px-6 py-4">
                                <span x-text="td.name"></span>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
    </div>

</div>

