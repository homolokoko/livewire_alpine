<?php

namespace App\Livewire\Auth\Citizen\State;

use App\Models\Auth;

use Livewire\Component;

use App\Lib\ConvertModel;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

class Create extends Component
{
    public $name, $country, $countries = [];

    protected $rules = [
        'name' => 'required',
        'country_id' => 'required'
    ];

    public function mount()
    {
        $this->countries = (new ConvertModel)->convertIdName(Auth\Country::get());
    }

    public function render()
    {
        return view('livewire.auth.citizen.state.create');
    }

    public function save($name)
    {
        $this->name = $name;

        $state = [
            'name' => $this->name,
            'country_id' => $this->country
        ];

        $status = Validator::make($state, ['name'=>'required']);

        if($status->fails()){
            return ['status'=> false];
        }else{
            Auth\State::create($state);
            return ['status'=>true];
        }
    }
}
