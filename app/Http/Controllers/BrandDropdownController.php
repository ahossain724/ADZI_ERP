<?php

namespace App\Http\Controllers;
use App\Models\Rbo;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BrandDropdownController extends Controller
{
  public function getBrandsByRbo($rboName)
    {
        //$customers = Customer::where('rbos_id', $rbo_id)->get();
         $brands = DB::table('brands AS b')
                        ->select('b.id', 'b.brand') // Select only the customer ID and name
                        ->join('rbos AS r', 'b.id', '=', 'r.brand_id')
                        ->where('r.rbo_name', $rboName) // Filter by the rboId passed from the AJAX request
                        ->get();
        return $brands;
        return response()->json($brands);
    }
}
