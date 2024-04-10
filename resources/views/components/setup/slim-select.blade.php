{{-- @props(['data','multiple','allowDeselect','placeholder']) --}}
<div wire:ignore>
    <div class="" x-data="{
        data: [
            {value:1,text: 'text 1'},
            {value:2,text: 'text 2'},
            {value:3,text: 'text 3'}
        ],
        muliple: false,
        init(){
            new SlimSelect({
                select: $refs.slimslect,
                settings: {
                    placeholderText: 'Search item',
                    allowDeselect: true
                }
            })
        },
    }">
        <select x-ref="slimslect" multiple>
            <option data-placeholder="true"></option>
            <template x-for="(item, index) in data">
                <option x-bind:value="item.value" x-text="item.text"></option>
            </template>

        </select>

    </div>
</div>

