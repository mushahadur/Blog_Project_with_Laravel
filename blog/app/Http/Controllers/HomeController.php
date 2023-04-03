<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use App\Models\ImageModel;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function blogIndex(){
        $post = PostModel::with('comments')->orderBy('id', 'desc')->take(2)->get();
        return view('BlogPost',compact('post') );
    }

    function imageIndex(){
        $image = ImageModel::with('comments')->get();
        

        return view('BlogImage',compact('image'));
     }

    function createBlogComment(Request $request, $id){

        Comment::blogComment($request, $id);
        return redirect('/')->with('message', 'Comment save successfully');
    }

    function createImageComment(Request $request, $id){

        Comment::imageComment($request, $id);
        return redirect('/image-page')->with('message', 'Comment save successfully');
    }

}
