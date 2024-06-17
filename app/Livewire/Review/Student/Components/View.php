<?php

namespace App\Livewire\Review\Student\Components;

use Livewire\Component;

class View extends Component
{
    public $student = [];

    public function mount($studentId)
    {
        $student = \App\Models\Admin\Student::find($studentId);
        $this->student = $student->toArray();
    }

    public function render()
    {
        return view('livewire.review.student.components.view');
    }

    public function showData()
    {
        dd($this->student);
    }
}
