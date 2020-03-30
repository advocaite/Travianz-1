<?php

namespace App\Http\Controllers;

use App\Models\Languages;
use App\Models\Server;
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
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $languages = Languages::all();
        $village = [];
        $servers = Server::all();
        return view('homepage', compact(['village', 'languages', 'servers']));
    }

}
