<?php

namespace App\Http\Livewire;

use App\Models\Page;
use App\Models\Modal;
use Livewire\Component;

class Pages extends Component
{

    use Modal;

    public $title;
    public $content;

    public function render()
    {
        $pages = Page::all();
        return view('livewire.pages',['pages'=>$pages]);
    }

    public function resetForm(){
        $this->title = "";
        $this->content = "";

    }
    public function store()
    {
        $page = new Page;
        $page->title = $this->title;
        $page->content = $this->content;
        $page->save();
        $this->resetForm();
        $this->closeModal();


    }
    public function edit($id){

        $page = Page::find($id);

        $page->title = $this->title;
        $page->content = $this->content;
        $this->showModal();



    }
    public function delete($id){

        $page = Page::find($id);
        $page->delete();

    }

}
