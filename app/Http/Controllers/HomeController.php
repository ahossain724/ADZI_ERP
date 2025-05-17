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
    //Order Precessing Views Route
    public function customerorders(Request $request){
        return view('orderprocessing.customerorders');
    }
    //Order Precessing Views Route
    public function deliveryorders(Request $request){
        return view('orderprocessing.deliveryorders');
    }
      //Order Precessing Views Route
      public function invoices(Request $request){
        return view('orderprocessing.invoices');
    }

    //Inventory Views Route
    public function transferrequest(Request $request){
        return view('inventory.transferrequest');
    }
      //Receipt Views Route
      public function receiptorder(Request $request){
        return view('inventory.receiptorder');
    }
    //Issue Views Route
    public function issueorder(Request $request){
        return view('inventory.issueorder');
    }
    //General Ledger Views Route
    public function glvoucher(Request $request){
        return view('generalledger.glvoucher');
    }
    public function yearendprocessing(Request $request){
        return view('generalledger.yearendprocessing');
    }
    public function iouvoucherentry(Request $request){
        return view('generalledger.iouvoucherentry');
    }
    public function iouadjustment(Request $request){
        return view('generalledger.iouadjustment');
    }
    public function receipt(Request $request){
        return view('accountsreceivable.receipt');
    }
    public function invoicesimple(Request $request){
        return view('accountsreceivable.invoicesimple');
    }
        public function complex(Request $request){
        return view('accountsreceivable.complex');
    }
     public function allocation(Request $request){
        return view('accountsreceivable.allocation');
    }
    

}
