@props(['model','multiple'])
<div>
        <input type="file" wire:model="{{$model}}" {{$multiple ?? '' }}>
</div>