<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AttendanceIndex extends Component
{
    public $showingPostModal = false;

    public function showPostModal()
    {
        $this->reset();
        $this->showingPostModal = true;
    }
    public function render()
    {
        return view('livewire.attendance-index');
    }
}
