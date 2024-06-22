@props(['list', 'model', 'placeholder'])
<div x-data="{
    open: false,
    selected: {},
    searchOption: '',
    model: @entangle($model),
    list: @entangle($list),
    selectedOption(val) {
        this.open = false;
        this.model = val.value;
        this.selected = val;
    },
    get listFilter() {
        return this.list.filter(item => item.text.toLowerCase().includes(this.searchOption.toLowerCase()));
    },
    selectedArray() {
        if (!this.model) {
            this.selected = { value: null, text: `{{ $placeholder }}` }
        } else {
            this.selected = this.list.find(obj => obj.value === this.model)
        }

    },
    init() {
        this.selectedArray()
    }
}" class="relative ">
    <div class=""><button x-show="!open" @click="open=true"
            class="w-full px-5 py-2 text-left bg-white border rounded-md ">
            <span x-text="selected.text"></span>
        </button>
        <div class=""><input x-show="open" x-trap="open" x-model="searchOption" type="text"
                class="w-full border rounded-md"></div>
        <div class="absolute w-full top-12">
            <ul @click.outside="open=false" x-show="open"
                class="w-full overflow-auto bg-scroll bg-white border rounded-md shadow-md max-h-80">
                <li>
                    <button @click="selectedOption({value:null,text:`{{ $placeholder }}`})"
                        :class="{ 'bg-indigo-700 text-white': !model }"
                        class="w-full text-sm font-medium hover:text-white hover:bg-indigo-700 shadow text-left px-5 py-2.5">
                        <span x-text="`{{ $placeholder }}`"></span></button>
                </li>
                <template x-for="item in listFilter">
                    <li>
                        <button @click="selectedOption(item)"
                            :class="{ 'bg-indigo-700 text-white': item.value == model }"
                            class="w-full text-sm font-medium hover:text-white hover:bg-indigo-700 shadow text-left px-5 py-2.5">
                            <span x-text="item.text"></span></button>
                    </li>
                </template>
            </ul>
        </div>
    </div>
