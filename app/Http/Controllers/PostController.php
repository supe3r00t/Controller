<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
  public function showUsers() {

      return"users date";
  }

  public function createPost (){
      return view('posts_create');
  }
}
