<?php

namespace App\Livewire\Auth\Citizen\City;

use App\Lib\ConvertModel;

use App\Models\Auth;

use Livewire\Component;

class Create extends Component
{
    public $name;
    public $count = 0;
    public $country, $countries = [];
    public $state, $states = [];

    protected $rules = [
        'name' => 'required',
        'country_id' => 'required'
    ];

    public function mount()
    {
        $this->countries = (new ConvertModel)->convertIdName(Auth\Country::get());
        // $this->states = (new ConvertModel)->convertIdName(Auth\State::where('country_id','1')->get());
    }

    public function updated()
    {
        $this->countries;
        if($this->count != 0)
            $this->states = (new ConvertModel)->convertIdName(Auth\State::where('country_id',$this->count)->get());
    }

    public function render()
    {
        return view('livewire.auth.citizen.city.create');
    }

    public function save()
    {
        // $this->count++;
        // dd($this->all());
    }
}
