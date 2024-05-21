@vite(['resources/css/flatpickr.css'])
<div>
    <div x-data="{
        open: false,
        fuse: null,
        searchQuery: '',
        searchResults: [],
        data: [
            { value: 1, text: 'Content of example 1' },
            { value: 2, text: 'Content of example 2' },
            { value: 3, text: 'Content of another example' }
        ],
        initializeFuse() {
            this.fuse = new Fuse(this.data, {
                keys: ['text'],
                includeScore: true
            });
        },
        performSearch() {
            if (this.searchQuery === '') {
                this.searchResults = [];
            } else {
                this.searchResults = this.fuse.search(this.searchQuery).map(result => result.item);
            }
        },
        showUp(){
            this.searchResults = this.data;
        },
        switchOpt(param){
            this.searchQuery = param.text;
        },
    }" x-init="initializeFuse" @click.away="searchResults=[]">
    <div class="flex items-center max-w-lg mx-auto w-full">
        <div class="relative w-full">
            <input class="rounded-t-md shadow border-0" type="text" x-model="searchQuery" @input="performSearch" @click="showUp()" placeholder="Search here!">
            <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-3">
                <svg @click="searchQuery=null;searchResults=[]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

            </button>
        </div>
    </div>

    <ul class="w-full rounded-b-md p-2 border-2 border-blue-500" x-show="searchResults.length > 0">
        <template x-for="result in searchResults">
            <li class="w-full px-2 py-1 rounded-md hover:bg-slate-700 hover:text-white cursor-pointer">
                <span @click="switchOpt(result)" x-text="result.text"></span>
            </li>
        </template>
    </ul>

    </div>

</div>
