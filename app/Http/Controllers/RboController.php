<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rbo;


class RboController extends Controller
{
   /* public function storerbo(Request $request)
    {
        $rboData = [
            'rbo_name' => $request->rbo_name,
            'short_name' => $request->short_name,
            'customer_id' => $request->customer_id,
            'address' => $request->address,
        ];
        $save=Rbo::create($rboData);
        if ($save){
            return response()->json([
                'status' => 1,
                'message'=>'Data Saved Successfully'
                
            ]);
        }
        
    }*/
    public function getRboList(Request $request)
    {
        // You might want to add authentication/authorization here
        // if (!auth()->check()) {
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }

        $rbos = Rbo::select('id', 'rbo_name')->get(); // Select only necessary columns

        return response()->json($rbos);
    }

    public function storerbo(Request $request)
    {
        

        $rbo = Rbo::create([
            'rbo_name' => $request->rbo_name,
            'short_name' => $request->short_name,
            'customer_id' => $request->customer_id,
            'address' => $request->address,
            // ... other fields
        ]);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'rbo' => $rbo // Return the newly created RBO object
            ]);
        }

        // Fallback for non-Ajax submission
        return redirect()->route('quotations')->with('success', 'RBO added successfully!');
    }
    public function getall()
    {
        $customer = Customer::all();
        return response()->json([
            'status' => 200,
            'customer' => $customer
        ]);
    }
    public function edit($id)
    {
        $customer = Customer::find($id);
        if ($customer) {
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
        $customer = Customer::find($request->id);
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
            $customer->credit_limit = $request->credit_limit;
            $customer->credit_terms = $request->credit_terms;
            $customer->expiration_date = $request->expiration_date;
            $customer->date_of_financial_statement = $request->date_of_financial_statement;
            $customer->bin = $request->bin;
            $customer->points_ob = $request->points_ob;
            $customer->short_name = $request->short_name;
            $customer->address2 = $request->address2;
            $customer-> zip_postal_code = $request->zip_postal_code;
            $customer->first_name = $request->first_name;
            $customer->title = $request->title;
            $customer->mobile_phone_number = $request->mobile_phone_number;
            $customer->customer_group = $request->customer_group;
            $customer->sic_code = $request->sic_code;
            $customer->discount_percent = $request->discount_percent;
            $customer->billing_address = $request->billing_address;
            $customer->average_payment_days = $request->average_payment_days;
            $customer->credit_available = $request->credit_available;
            $customer->date_of_credit_application = $request->date_of_credit_application;
            $customer->date_incorporated = $request->date_incorporated;
            $customer->payment_instructions = $request->payment_instructions;
            $customer->remarks = $request->remarks;
            $customer->backorder_type = $request->backorder_type;
            $customer->name = $request->name;
            $customer->city = $request->city;
            $customer->country = $request->country;
            $customer->middle_name = $request->middle_name;
            $customer->email = $request->email;
            $customer->fax = $request->fax;
            $customer->tax_number = $request->tax_number;
            $customer->customer_type = $request->customer_type;
            $customer->tax_scope = $request->tax_scope;
            $customer->agent = $request->agent;
            $customer->customer_status = $request->customer_status;
            $customer->credit_rating = $request->credit_rating;
            $customer->date_approved = $request->date_approved;
            $customer->date_of_credit_evaluation = $request->date_of_credit_evaluation;
            $customer->payment_method = $request->payment_method;
            $customer->save();
            return response()->json([
                'status' => 200,
                'message' => 'Customer updated successfully'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Customer not found'
            ]);
        }
    }
    public function delete(Request $request)
{
    $customer = Customer::find($request->id);
    if ($customer && $customer->delete()) {
        return response()->json(['status' => 200, 'message' => 'Customer deleted successfully.']);
    } else {
        return response()->json(['status' => 400, 'message' => 'Customer to delete Codes.']);
    }
}
}

