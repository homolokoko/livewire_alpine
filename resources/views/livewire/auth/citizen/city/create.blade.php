
<div class="border rounded-lg shadow-sm bg-card text-neutral-900"
x-data="{
    message: '',
    name: '',
    count: 0,
    save(){
        this.count++;
        $wire.count = this.count;
        console.log(this.name);
        {{-- return; --}}
        $wire.save(this.name)
            .then((res)=>{
                if(!res.status){
                    this.message = 'unsuccess';
                }else{
                    this.message = 'success';
                    this.name = null;
                }
            });
    },
    forward(){},
}">
    <div class="flex flex-col space-y-1.5 p-6">
        <div class="flex justify-between">
            <h4>
                <span>City</span><span x-text="count"></span>
            </h4>
            <div class="">
                <span x-show="message==='unsuccess'" class="bg-red-600 text-white relative flex items-center text-xs font-semibold pl-2 pr-2.5 py-1 rounded-full">
                    <svg class="relative w-3.5 h-3.5 -translate-x-0.5 opacity-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" /></svg>
                    <span>Unsuccess</span>
                </span>
                <span x-show="message==='success'" class="bg-green-600 text-white relative flex items-center text-xs font-semibold pl-2 pr-2.5 py-1 rounded-full">
                    <svg class="relative w-3.5 h-3.5 -translate-x-0.5 opacity-90"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /></svg>
                    <span>Sucess</span>
                </span>
            </div>
        </div>
        <p class="text-sm text-neutral-500">Make changes to your account here. Click save when you're done.</p>
    </div>
    <div class="p-6 pt-0 space-y-2">
        <div class="space-y-1">
            <x-input-label :value="__('Country')" />
            <x-setup.slim-select>
                <x-slot name="multiple"> false </x-slot>
                <x-slot name="selected"> country </x-slot>
                <x-slot name="placeholder"> 'select country' </x-slot>
                <x-slot name="data"> countries </x-slot>
            </x-setup.slim-select>
        </div>
        <div class="space-y-1">
            <x-input-label :value="__('State')" />
            {{-- <x-alpine.depend-dropdown>
                <x-slot name="model"> state </x-slot>
                <x-slot name="list"> states </x-slot>
                <x-slot name="placeholder"> {{__('please select a country!')}} </x-slot>
            </x-alpine.depend-dropdown> --}}
            <div class="" x-data="{
                states: @entangle('states')
            }"> <span x-text="JSON.stringify(states)"></span> </div>
            {{-- <x-setup.slim-select>
                <x-slot name="multiple"> false </x-slot>
                <x-slot name="selected"> state </x-slot>
                <x-slot name="placeholder"> 'select state' </x-slot>
                <x-slot name="data"> states </x-slot>
            </x-setup.slim-select> --}}
        </div>
        <div class="space-y-1" x-data>
            <x-input-label :value="__('Name')" />
            <x-text-input x-model="name" placeholder="Enter Name" />
        </div>
        <div class="flex space-y-1 justify-evenly">
            <button @click="save()" type="button" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-blue-500 transition-colors duration-100 rounded-md focus:ring-2 focus:ring-offset-2 focus:ring-blue-100 bg-blue-50 hover:text-blue-600 hover:bg-blue-100">
                Save
            </button>
            <button @click="forward()" type="button" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-green-500 transition-colors duration-100 rounded-md focus:ring-2 focus:ring-offset-2 focus:ring-green-100 bg-green-50 hover:text-green-600 hover:bg-green-100">
                Next
            </button>
        </div>
    </div>
</div>