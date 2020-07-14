<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Postcategory;

class BlogController extends Controller
{
    public function index(Request $request)
    {


        $posts = Post::orderBy('created_at','desc')->whereStatus('PUBLISHED')
        ->take(6)->get();
   


        return view('blog.index', ['myPosts'=>$posts]);
    }

    public function posts($id = null)
    {
        if($id){
            $posts = Post::orderBy('created_at','desc')->whereStatus('PUBLISHED')
            ->whereCategoryId($id)
            ->paginate(3);
        }
        else {
            $posts = Post::orderBy('created_at','desc')->whereStatus('PUBLISHED')->paginate(3);
            
        
        }
        $categories = Postcategory::all();  


       


        return view('blog.posts', ['id'=>$id,'myPosts'=>$posts , 'myCatageries'=>$categories]);
    }

    public function show($slug){

        $post = Post::whereSlug($slug)->first();


        return view('blog.show', ['post'=>$post]);
    }
    
}
