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
    //Cross Application Views Routes
    public function settings(Request $request){
        return view('crossapplication.settings');
    }
    public function customers(Request $request){
        return view('crossapplication.customers');
    }
    public function supplier(Request $request){
        return view('crossapplication.supplier');
    }
    public function items(Request $request){
        return view('crossapplication.items');
    }
    //Purchase Views Route
    public function purchaseorder(Request $request){
        return view('purchase.purchaseorder');
    }
    public function requisitionentry(Request $request){
        return view('purchase.requisitionentry');
    }
    //Order Precessing Views Route
    public function quotations(Request $request){
        return view('orderprocessing.quotations');
    }
}
