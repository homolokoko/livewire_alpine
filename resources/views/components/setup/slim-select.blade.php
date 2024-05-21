{{-- @props(['data','multiple','allowDeselect','placeholder']) --}}
@props(['multiple', 'data', 'selected', 'placeholder'])
<div>
    <div class="" x-data="{
        multiple: {{ $multiple }},
        selected: @entangle($selected),
        data: @entangle($data),
        async init(){
            await this.data;
            $watch('selected',selected => console.log({selected: selected}));
            new SlimSelect({
                select: $refs.slimslect,
                settings: {
                    placeholderText: {{ $placeholder }},
                    allowDeselect: true
                }
            });
        },
    }">
        <select x-ref="slimslect" x-bind:multiple="multiple" x-model="selected">
            <option data-placeholder="true"></option>
            <template x-for="(item, index) in data">
                <option x-bind:value="item.value" x-text="item.text"></option>
            </template>

        </select>

    </div>
    @vite(['resources/css/setup/slimselect.css'])

</div>

