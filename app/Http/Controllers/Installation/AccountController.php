<?php

namespace App\Http\Controllers\Installation;

use App\Http\Controllers\Controller;
use App\Models\Languages;
use Illuminate\Http\Request;

class AccountController extends Controller
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
        return view('homepage', compact(['village', 'languages']));
    }

}
