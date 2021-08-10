<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Livewire\Component;

class Pages extends Component
{
    public $openFormModal = false;
    public $title;
    public $content;


    public function showModal(){
        $this->openFormModal = true;
    }
    public function closeModal(){
        $this->openFormModal = false;
    }
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
