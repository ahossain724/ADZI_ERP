<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;


class ItemsController extends Controller
{
    public function storeitems(Request $request)
    {
        $itemsData = [
          'item_code'=> $request->item_code,
          'description'=> $request->description,
          'long_description'=> $request->long_description,
          'links'=> $request->links,
          'notes'=> $request->notes,
          'stock_type'=> $request->stock_type,
          'barcode'=> $request->barcode,
          'alias'=> $request->alias,
          'warehouse'=> $request->warehouse,
          'issue_unit'=> $request->issue_unit,
          'conv_factor_issue'=> $request->conv_factor_issue,
          'item_group'=> $request->item_group,
          'price_category'=> $request->price_category,
          'grade'=> $request->grade,
          'division'=> $request->division,
          'net_weight_per_unit'=> $request->net_weight_per_unit,
          'minimum_order_qty'=> $request->minimum_order_qty,
          'yield_percent'=> $request->yield_percent,
          'lead_time_fixed'=> $request->lead_time_fixed,
          'superceded_by'=> $request->superceded_by,
          'part_no'=> $request->part_no,
          'length'=> $request->length,
          'brand'=> $request->brand,
          'minimum_price'=> $request->minimum_price,
          'effectivity_date'=> $request->effectivity_date,
          'bin_locations'=> $request->bin_locations,
          'stocking_unit'=> $request->stocking_unit,
          'packing_unit'=> $request->packing_unit,
          'conv_factor_packing'=> $request->conv_factor_packing,
          'tax_category'=> $request->tax_category,
          'import_duty'=> $request->import_duty,
          'supplier_number'=> $request->supplier_number,
          'unit_of_weight'=> $request->unit_of_weight,
          'minimum_order_value'=> $request->minimum_order_value,
          'demand_time_fence'=> $request->demand_time_fence,
          'lead_time_variable'=> $request->lead_time_variable,
          'supercedes'=> $request->supercedes,
          'hs_code'=> $request->hs_code,
          'width'=> $request->width,
          'standard_cost'=> $request->standard_cost,
          'multiplier_selling'=> $request->multiplier_selling,
          'expiration_date'=> $request->expiration_date,
          'team'=> $request->team,
          'alternative_unit'=> $request->alternative_unit,
          'statistical_unit'=> $request->statistical_unit,
          'conv_factor_statistical'=> $request->conv_factor_statistical,
          'item_category'=> $request->item_category,
          'support_category'=> $request->support_category,
          'country_of_origin'=> $request->country_of_origin,
          'weight_per_unit'=> $request->weight_per_unit,
          'shelf_life'=> $request->shelf_life,
          'order_multiple'=> $request->order_multiple,
          'planning_time_fence'=> $request->planning_time_fence,
          'lead_time_transport'=> $request->lead_time_transport,
          'supercession_code'=> $request->supercession_code,
          'unit_of_length'=> $request->unit_of_length,
          'height'=> $request->height,
          'standard_price'=> $request->standard_price,
          'multiplier_purchasing'=> $request->multiplier_purchasing,
          'strip'=> $request->strip
        ];
        $save=Items::create($itemsData);
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

