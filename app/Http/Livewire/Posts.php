<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Modal;
use Livewire\Component;
use Livewire\WithFileUploads;

class Posts extends Component
{
    use WithFileUploads;
    use Modal;
    public $title;
    public $content;
    public $image;
    public $category_id;
    public $popUpMessage  = false;


    public function showMessageDialog(){
        $this->popUpMessage = true;


    }
   
    public function store(){

        $post = new Post;
        $post->title = $this->title;
        $post->content = $this->content;
        $post->slug = $this->title;
        $post->category_id = 1;

        $post->save();
        $this->closeModal();

    }

    public function edit($id){
        $post = Post::find($id);
        $post->title = $this->title;
        $post->content = $this->content;
        $post->image = $this->image;
    }

    public function delete($id){
        $post = Post::find($id);
        $post->delete();

    }
    public function render()
    {

        $posts = Post::with('authors')->get();

        return view('livewire.posts',['posts'=>$posts]);
    }
}
