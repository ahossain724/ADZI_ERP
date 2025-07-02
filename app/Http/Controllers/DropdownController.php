<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rbo;
use App\Models\customer;
use Illuminate\Support\Facades\DB; // For raw queries if needed, but Eloquent is preferred

class DropdownController extends Controller
{
    
    public function getCustomersByRbo($rboName)
    {
        //$customers = Customer::where('rbos_id', $rbo_id)->get();
         $customers = DB::table('customer AS c')
                        ->select('c.id', 'c.name') // Select only the customer ID and name
                        ->join('rbos AS r', 'c.id', '=', 'r.customer_id')
                        ->where('r.rbo_name', $rboName) // Filter by the rboId passed from the AJAX request
                        ->get();
        //return $customers;
        return response()->json($customers);
    }
}