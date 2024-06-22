<?php

namespace App\Livewire\Admin\Room\Component;

use Livewire\Component;
use App\Models\Admin\Room;

class Create extends Component
{
    public $no, $shift;
    public $shiftList = [];

    public $rules = ['no'=>'required|numeric', 'shift'=>'required'];

    public function mount()
    {
        $this->shiftList = [
            ['value'=>'mor', 'text'=>'Morning'],
            ['value'=>'aft', 'text'=>'Afternoon'],
            ['value'=>'evn', 'text'=>'Evening']
        ];
    }
    // protected $rules = [
    //     'name' => 'required|unique:room'
    // ];

    public function render()
    {
        return view('livewire.admin.room.component.create');
    }

    public function saveFinish()
    {
        $validated = $this->validate($this->rules);
        // return true;
        // dd($this->all());
        if($validated){
            Room::create($validated);
        }
        $this->no =null;
        $this->redirect(route('admin.room.base-view'), $navigate = true);
    }

    public function saveContinue()
    {
        $validated = $this->validate($this->rules);
        // return true;
        // dd($this->all());
        if($validated){
            Room::create($validated);
        }
        $this->no =null;
    }
}
