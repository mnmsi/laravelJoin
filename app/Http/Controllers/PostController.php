<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class PostController extends Controller
{
    

    public function index()
    {
    	$post = post::all();
    	return view('post', compact('post'));
    }

    public function HasMany()
    {
    	$post = post::where('user_id', 1)->get();
    	return view('has_many', compact('post'));
    }


}
