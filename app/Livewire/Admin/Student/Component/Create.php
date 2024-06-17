<?php

namespace App\Livewire\Admin\Student\Component;

use Livewire\Component;

class Create extends Component
{
    public $dob, $name, $gender;
    public $genders = [];

    public function mount()
    {
        $this->genders = [
            ['value' => 'm', 'text' => 'Male'],
            ['value' => 'f', 'text' => 'Female']
        ];
    }

    public function render()
    {
        return view('livewire..admin.student.component.create');
    }

    public function submit()
    {

        // \App\Models\Admin\Student::create(['dob' => $this->dob, 'name' => $this->name, 'gender' => $this->gender]);
        if (
            \App\Models\Admin\Student::create(['dob' => $this->dob, 'name' => $this->name, 'gender' => $this->gender])
        ) {
            $this->name = '';
            return true;
        }
    }
}
