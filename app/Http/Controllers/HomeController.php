<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     *
     * public function __construct()
     * {
     *  $this->middleware('auth');
     * }
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.home');
    }
    public function home()
    {
        return view('pages.welcome');
    }

    public function show()
    {
        $posts = Post::orderBy('id' , 'DESC')->get();
        return view('pages.welcome', compact('posts'));

    }

    public function page()
    {
        return view('pages.page1');
    }

    public function page2()
    {
        return view('pages.page2');
    }

    public function page3()
    {
        return view('pages.page3');
    }

}
