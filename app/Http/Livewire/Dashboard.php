<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $status = false;

    public function changeStatus(){
        $this->status = true;

    }
    public function render()
    {
         $s = $this->status;

        return view('livewire.dashboard',['s'=>$s]);
    }
}
