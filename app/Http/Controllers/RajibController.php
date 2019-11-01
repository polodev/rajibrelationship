<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class RajibController extends Controller
{
  public function index()
  {
    $posts = Post::all();
    return view('rajib', compact('posts'));
  }
}
