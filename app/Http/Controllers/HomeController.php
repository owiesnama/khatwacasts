<?php

namespace App\Http\Controllers;

use App\podcast;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $podcasts = Podcast::all();

        dd($podcasts);
        return view('index', compact('podcasts'));
    }

    /**
     * Show single podcast
     * @param podcast $podcast
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Podcast $podcast)
    {
        return view('podcast.show',compact('podcast'));
    }
}
