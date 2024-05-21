<div>
    <div class=""
        x-data="{}">
        {{-- <div class="">
            @livewire('auth.citizen.country.create', key('auth.citizen.country.create'))
        </div> --}}
        <div
        x-data="{
            tab: 'country',
            init(){},
        }">

            <div  class="flex justify-between bg-slate-300 rounded-lg px-2 py-2">
                <button  @click="tab='country'" type="button" x-bind:class="tab='country' ?? ' bg-white'"
                class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide transition-colors duration-200 border rounded-md text-neutral-500 hover:text-neutral-700 border-neutral-200/70 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline">
                Country</button>
                <button  @click="tab='state'" type="button" x-bind:class="tab='state' ?? ' bg-white'"
                class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide transition-colors duration-200 border rounded-md text-neutral-500 hover:text-neutral-700 border-neutral-200/70 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline">
                State</button>
                <button  @click="tab='city'" type="button" x-bind:class="tab='city' ?? ' bg-white'"
                class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide transition-colors duration-200 border rounded-md text-neutral-500 hover:text-neutral-700 border-neutral-200/70 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline">
                City</button>
            </div>
            <div class="relative w-full mt-2 content">

                <div x-show="tab==='country'">
                    @livewire('auth.citizen.country.create', key('auth.citizen.country.create'))
                </div>

                <div x-show="tab==='state'">
                    @livewire('auth.citizen.state.create', key('auth.citizen.state.create'))
                </div>

                <div x-show="tab==='city'">
                    @livewire('auth.citizen.city.create', key('auth.citizen.city.create'))
                </div>

            </div>
        </div>
    </div>

</div>
