<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{

    public $title;
    public $content;
    public $image;
    public $category_id;


    public $openFormModal = false;

    public function showModal(){
        $this->openFormModal = true;
    }
    public function closeModal(){
        $this->openFormModal = false;
    }

    public function store(){

        $post = new Post;
        $post->title = $this->title;
        $post->content = $this->content;

        $post->save();

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

        return view('livewire.posts');
    }
}
