<?php

namespace App\Livewire\Auth\Category\Child;

use Livewire\Component;

use App\Models\Auth\Category;;

class Table extends Component
{
    public $datatable = [];
    public $columns = [];

    public function mount(){
        $this->columns = ['ID', 'Name'];
        $this->datatable = Category::get();
    }
    public function render()
    {
        return view('livewire.auth.category.child.table');
    }
}
