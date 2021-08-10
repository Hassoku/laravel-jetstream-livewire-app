<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
    public $name;
    public $image;
    public $openFormModal = false;

    public function showForm(){
        $this->openFormModel = true;
    }

    public function closeForm(){
        $this->openFormModel = false;
    }

    public function resetForm(){
        $this->name = "";
        $this->image = "";
        
    }

    public function store(){
        $category = new Category;
        $category->name = $this->name;
        $category->image = $this->image;
        $category->save();
    }

    public function edit($id){

        $category = Category::find($id);

        $category->name = $this->name;
        $category->image = $this->name;
        $this->showForm();

    }

    public function delete($id){

        $category = Category::find($id);
        $category->delete();

    }
    public function render()
    {
        return view('livewire.categories');
    }
}
