<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function getAllPost(){
        $posts = Post::with('authors')->get();
        $result = "";
        !$posts ? $result = response()->json($posts) :  $result = response()->json("No Records Found");
        return $result;





    }
    public function getAllCategory(){
        $categories = Category::all();
        $result = "";
        !$categories ? $result = response()->json($categories) :  $result = response()->json("No Records Found");
        return $result;





    }
}
