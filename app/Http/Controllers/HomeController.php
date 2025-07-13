<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rbo;
use App\Models\Referencetbl;
use App\Models\customer;
use App\Models\Brand;
use App\Models\Quotations;
use App\Models\CustomerOrder;


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
        $customerList= customer::select('id','customer_number')->get();
        //return $rboList;
        return view('crossapplication.customers',compact('customerList'));
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
        $rboList = Rbo::select('rbo_name')->distinct()->get();
        $rbo2List = Rbo::select('id','rbo_name')->get();
        $referencetblList= Referencetbl::select('id','reference')->get();
        $brandList= Brand::select('id','brand')->get();
        $customerList= customer::select('id','name')->get();
        $quotations = Quotations::all();
        return view('orderprocessing.quotations',compact('rboList','referencetblList','customerList','brandList','rbo2List','quotations'));
    }
    //Order Precessing Views Route
    public function customerorders(Request $request){
        $rboList= Rbo::select('id','rbo_name')->get();
        $referencetblList= Referencetbl::select('id','reference')->get();
        $customerList= customer::select('id','name')->get();
        $quotations = Quotations::all();
        $customerorder = CustomerOrder::all();

        //return $rboList;
        return view('orderprocessing.customerorders',compact('rboList','referencetblList','customerList','quotations','customerorder'));
    }
    //Order Precessing Views Route
    public function deliveryorders(Request $request){
        return view('orderprocessing.deliveryorders');
    }
      //Order Precessing Views Route
      public function invoices(Request $request){
        return view('orderprocessing.invoices');
    }
    //Order Precessing Views Route
      public function itemprint(Request $request){
       $barcode = (new \Picqer\Barcode\Types\TypeCode128())->getBarcode('01792527058');

    //Output the barcode as HTML in the browser with a HTML Renderer
       $renderer = new \Picqer\Barcode\Renderers\HtmlRenderer();
       $barcodeImg =$renderer->render($barcode);
        return view('orderprocessing.itemprint',compact('barcodeImg'));
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
     //Issue Views Route
    public function classesdimensions(Request $request){
        return view('inventory.classesdimensions');
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
