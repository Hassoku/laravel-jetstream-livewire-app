<?php

namespace App\Http\Controllers\Api;

use App\Models\Page;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function getAllPost(){
        $posts = Post::with('authors')->get();
        $result = "";
        $posts ? $result = response()->json($posts) :  $result = response()->json("No Records Found");
        return $result;





    }
    public function getAllCategory(){
        $categories = Category::all();
        $result = "";
        !$categories ? $result = response()->json($categories) :  $result = response()->json("No Records Found");
        return $result;


    }

    public function getAllPages(){
        $pages = Page::all();
        $result = "";
        $pages ? $result = response()->json($pages) :  $result = response()->json("No Records Found");
        return $result;

    }

    public function store(Request $request){

        $post = new Post;

        $vlidate = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'slug' => 'required'
        ]);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = 1;
        $post->slug = $request->title;
        if($post->save()){

            return response()->json('Post Added Successfully');

        }else{

            return response()->json('Something Went Wrong');

        }


    }


    public function addPages(Request $request){

        $page = new Page;

        $validate = $request->validate(['title'=>'required','content'=>'required']);
        $page->title = $request->page;

        $page->content = $request->content;
        $created = $page->save();
        if($created){
            return response()->json('Page Added Successfully');
        }else{
            return response()->json('Something Went Wrong');
        }

    }
}
