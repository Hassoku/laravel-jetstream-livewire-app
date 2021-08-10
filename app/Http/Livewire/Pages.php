<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pages extends Component
{
    public $openFormModal = false;

    public function showModal(){
        $this->openFormModal = true;
    }
    public function closeModal(){
        $this->openFormModal = false;
    }
    public function render()
    {
        return view('livewire.pages');
    }
}
