<?php

namespace App\Livewire\Admin\Room\Component;

use Livewire\Component;
use App\Models\Admin\Room;

class Action extends Component
{
    public $roomId;
    public $no, $shift;
    public $shiftList = [];

    public function boot()
    {
        $this->shiftList = [
            ['value'=>'mor', 'text'=>'Morning'],
            ['value'=>'aft', 'text'=>'Afternoon'],
            ['value'=>'evn', 'text'=>'Evening']
        ];
    }

    public function mount()
    {
        $room = Room::find($this->roomId);
        $this->no = $room->no;
        $this->shift = $room->shift;
    }

    public function render()
    {
        return view('livewire.admin.room.component.action');
    }

    public function removeFinish()
    {
        Room::where('id', $this->roomId)->delete();
        $this->redirect(route('admin.room.base-view'), $navigate = true);
    }
    public function removeContinue()
    {
        Room::where('id', $this->roomId)->delete();
    }

    public function modifyFinish()
    {
        Room::where('id', $this->roomId)->update([
            'no' => $this->no,
            'shift' => $this->shift
        ]);
        $this->redirect(route('admin.room.base-view'), $navigate = true);
    }
    public function modifyContinue()
    {
        Room::where('id', $this->roomId)->update([
            'no' => $this->no,
            'shift' => $this->shift
        ]);
    }
}
