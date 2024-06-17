<?php

namespace App\Livewire\Admin\Student;

use Livewire\Component;

class Index extends Component
{
    public $studentId = null;
    public $page = 'table';

    protected $listeners = [
        'admin.student.component.edit' => 'renderEditComponent'
    ];

    public function render()
    {
        return view('livewire..admin.student.index');
    }

    public function switchComponent($page, $studentId = null)
    {
        $this->page = $page;
        // dd($page);
    }

    public function renderEditComponent($val)
    {
        $this->studentId = $val;
        dd($this->studentId);
        $this->page = 'edit';
    }
}
