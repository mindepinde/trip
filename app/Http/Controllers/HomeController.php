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

    public function world()
    {
        return view('pages.world');
    }

    public function europe()
    {
        return view('pages.europe');
    }

    public function asia()
    {
        return view('pages.asia');
    }

    public function americas()
    {
        return view('pages.americas');
    }

    public function oceania()
    {
        return view('pages.oceania');
    }

    public function africa()
    {
        return view('pages.africa');
    }
    
    public function links()
    {
        return view('pages.links');
    }

}
