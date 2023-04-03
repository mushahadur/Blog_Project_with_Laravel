<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    function postIndex(){
        return view('admin.post.index');
    }
    function imgeIndex(){
        return view('admin.image.index');
    }
}
