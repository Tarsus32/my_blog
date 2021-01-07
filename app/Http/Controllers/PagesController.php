<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {

    	return view('welcome', [
    		'title' =>'Ahoj Svet',
    		'posts' => Post::all(),
    	]);
    }
    public function about()
    {
    	return view('about');
    }
    public function gallery()
    {
    	return view('gallery');
    }
    public function contact()
    {
    	return view('contact');
    }
}
