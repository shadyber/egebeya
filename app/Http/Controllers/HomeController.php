<?php

namespace App\Http\Controllers;

use App\Item;
use App\ItemCategory;
use App\User;
use Illuminate\Http\Request;
use Auth;

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
        $items=Auth::user()->items();
       
        $categories=ItemCategory::all();


        return view('home')->with(['categories'=>$categories,'items'=>$items]);
    }
}
