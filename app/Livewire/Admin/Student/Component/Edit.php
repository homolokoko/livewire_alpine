<?php

namespace App\Livewire\Admin\Student\Component;

use Livewire\Component;
use \App\Models\Admin\Student;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    public $relatedId, $name, $dob, $gender, $profile;
    public $genders = [
        ['value' => 'm', 'text' => 'Male'],
        ['value' => 'f', 'text' => 'Female']
    ];

    public function mount($studentId)
    {
        $student = \App\Models\Admin\Student::find($studentId);
        $this->relatedId = $student->id;
        $this->name = $student->name;
        $this->dob = $student->dob;
        $this->gender = $student->gender;
    }

    public function render()
    {
        return view('livewire.admin.student.component.edit');
    }

    public function getData($relatedId)
    {
        return Student::find($relatedId)->toArray();
    }

    public function save()
    {
        Student::where('id', $this->relatedId)
            ->update([
                'name' => $this->name,
                'dob' => $this->dob,
                'gender' => $this->gender
            ]);
        Student\Image::create([
            'student_id' => $this->relatedId,
            'source' => $this->profile,
        ]);
    }
}
