<?php

namespace App\Http\Controllers;

use App\Jobs\UpdateWoodResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FieldsController extends Controller
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
        UpdateWoodResource::dispatch(Auth::user());
        $village = [];
        return view('fields', compact('village'));
    }
}
