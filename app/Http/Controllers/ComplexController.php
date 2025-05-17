<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complex;


class ComplexController extends Controller
{
   public function storecomplex(Request $request)
    {
        $complexData = [
            'voucher_number'=> $request->voucher_number,
            'reference'=> $request->reference,
            'date'=> $request->date,
            'year'=> $request->year,
            'period'=> $request->period,
            'header_description'=> $request->header_description
        ];
        $save=Complex::create($complexData);
        if ($save){
            return response()->json([
                'status' => 1,
                'message'=>'Data Saved Successfully'
                
            ]);
        }
        
    }
  public function getall()
  {
      $supplier = Supplier::all();
      return response()->json([
          'status' => 200,
          'customer' => $customer
      ]);
  }
  public function edit($id)
  {
      $supplier = Supplier::find($id);
      if ($supplier) {
          return response()->json([
              'status' => 200,
              'cumtomer' => $customer
          ]);
      } else {
          return response()->json([
              'status' => 404,
              'message' => 'Customer not found'
          ]);
      }
  }
  public function update(Request $request)
  {
      $supplier = Supplier::find($request->id);
      if ($customer) {
          $customer->customer_number = $request->customer_number;
          $customer->address = $request->address;
          $customer->state_province = $request->state_province;
          $customer->last_name = $request->last_name;
          $customer->phone = $request->phone;
          $customer->url = $request->url;
          $customer->control_account_ar = $request->control_account_ar;
          $customer->price_group = $request->price_group;
          $customer->industry_segment = $request->industry_segment;
          $customer->comission_percent = $request->comission_percent;
          $customer->save();
          return response()->json([
              'status' => 200,
              'message' => 'Supplier updated successfully'
          ]);
      } else {
          return response()->json([
              'status' => 404,
              'message' => 'Supplier not found'
          ]);
      }
  }
  public function delete(Request $request)
{
  $supplier = Supplier::find($request->id);
  if ($customer && $customer->delete()) {
      return response()->json(['status' => 200, 'message' => 'Customer deleted successfully.']);
  } else {
      return response()->json(['status' => 400, 'message' => 'Customer to delete Codes.']);
  }
}
    


}