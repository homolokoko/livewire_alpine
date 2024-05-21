<?php

namespace App\Livewire\Auth\Citizen\Country;


use App\Models\Auth\Country;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Arr;

use Livewire\Component;

class Create extends Component
{
    public $name, $code, $cc2, $cc3;
    protected $rules = [
        'name' => 'required',
        'code' => 'required',
        'cc2' => 'required',
        'cc3' => 'required',
    ];
    public function render()
    {
        return view('livewire.auth.citizen.country.create');
    }
    public function save($country)
    {
        // $this->name = Arr::get($country, 'name');
        // $this->code = Arr::get($country, 'code');
        // $this->cc2 = Arr::get($country, 'cc2');
        // $this->cc3 = Arr::get($country, 'cc3');

        $status = Validator::make($country, $this->rules);

        if($status->fails()){
            return ['status'=> false];
        }else{
            Country::create($country);
            return ['status'=>true];
        }
    }
}
