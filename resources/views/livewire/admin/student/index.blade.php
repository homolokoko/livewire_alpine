<div>
    <div class="flex justify-end p-5">
        <div class="flex">
            <button wire:click="switchComponent('create')"
                class="{{$page=='create' ? 'bg-indigo-600 text-white':''}} px-4 py-1 font-mono text-xs text-indigo-600 uppercase border border-indigo-600 rounded-l-md hover:bg-indigo-600 hover:text-white">Create</button>
            <button wire:click="switchComponent('table')" 
                class=" {{$page=='table' ? 'bg-indigo-600 text-white':''}} px-4 py-1 font-mono text-xs text-indigo-600 uppercase border border-indigo-600 rounded-r-md hover:bg-indigo-600 hover:text-white">Table</button>
        </div>
    </div>
    <div class="p-5">

        @if ($page=='create')
        <div class="" wire:ignore>
           @livewire('admin.student.component.create') 
        </div>
        @endif

        @if ($page=='table')
        <div class="" wire:ignore>
            @livewire('admin.student.component.table')
        </div>
        @endif
        
        
    </div>
</div>
