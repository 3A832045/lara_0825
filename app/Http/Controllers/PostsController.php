<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        return view('index');
    }

    public function post(){
        return view('post');
    }

    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }
}
