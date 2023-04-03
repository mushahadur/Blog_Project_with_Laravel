<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use App\Models\ImageModel;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    function createImage(Request $request){
        ImageModel::newImage($request);
        return redirect('/add-image')->with('message', 'Image save successfully');
    }

    function createPost(Request $request){

        // $request->validate([
        //     'title' => 'required|unique:posts|max:255',
        //     'body' => 'required',
        // ]);

        PostModel::newPost($request);
        return redirect('/add-post')->with('message', 'Post  save successfully');
    }
}
