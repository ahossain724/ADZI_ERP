<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rbo;
use App\Models\customer;
use Illuminate\Support\Facades\DB; // For raw queries if needed, but Eloquent is preferred

class DropdownController extends Controller
{
    
    public function getCustomersByRbo($rbo_id)
    {
        $customers = Customer::where('rbos_id', $rbo_id)->get();
        return response()->json($customers);
    }
}