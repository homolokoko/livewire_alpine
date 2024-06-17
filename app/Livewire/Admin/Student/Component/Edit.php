<?php

namespace App\Livewire\Admin\Student\Component;

use Livewire\Component;
use Livewire\WithFileUploads;
use \App\Models\Admin\Student;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;

    public $relatedId, $name, $dob, $gender, $images, $file;
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

    public function getData($id)
    {
        return Student::find($id)->toArray();
    }

    public function save()
    {
        Student::where('id', $this->id)
            ->update([
                'name' => $this->name,
                'dob' => $this->dob,
                'gender' => $this->gender
            ]);
        Student\Image::create([
            'student_id' => $this->id,
            'source' => $this->images->getClientOriginalName(),
        ]);
    }
}
