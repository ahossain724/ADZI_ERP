<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rbo;
use App\Models\Referencetbl;
use Illuminate\Support\Facades\DB; 

class ReferenceDropdownController extends Controller
{
    public function getReferencesByRbo($rboId)
    {
        /*$rboId=  DB::table('rbos')
                  ->select('id')
                  ->where('rbo_name', $rboName)
                  ->get();*/
        
        //dd($rboId);
        //$customers = Customer::where('rbos_id', $rbo_id)->get();
         $references = DB::table('referencestbl AS b')
                        ->select('b.id', 'b.reference') // Select only the customer ID and name
                        ->join('rbos AS r', 'b.id', '=', 'r.reference_id')
                        ->where('b.rbo_id', $rboId) // Filter by the rboId passed from the AJAX request
                        ->get();
        //return $references;
        return response()->json($references);
    }
}