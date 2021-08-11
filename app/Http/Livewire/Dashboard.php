<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Dashboard extends Component
{
    public $status = false;

    public function changeStatus(){
        $this->status = true;

    }
    public function render()
    {
        $authors = Post::with('authors')->get();


        return view('livewire.dashboard',['authors'=>$authors]);
    }
}
