<?php

namespace App\Http\Controllers;

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
        return view('pages.home');
    }
    public function home1(){
        return view('pages.home1');
    }
    public function settings(Request $request){
        return view('crossapplication.settings');
    }
    public function customers(Request $request){
        return view('crossapplication.customers');
    }
}
