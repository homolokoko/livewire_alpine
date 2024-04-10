{{-- @props(['date']) --}}
<div wire:ignore>
    <div class="" x-data="{
        {{-- date: @entangle('date'), --}}
        date: null,
        init(){
            flatpickr($refs.element, {});
        }
    }">
    <x-text-input x-ref="element" x-model="date" />

    </div>
</div>

