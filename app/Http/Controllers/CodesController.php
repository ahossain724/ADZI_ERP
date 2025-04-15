<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\codes;

class CodesController extends Controller
{
    public function store(Request $request)
    {
        $codesData = [
            'code_type' => $request->code_type,
            'code' => $request->code,
            'detailed_description' => $request->detailed_description,
            'alternate_code' => $request->alternate_code,
            'active' => $request->active,
            'team' => $request->team,
            'property_list' => $request->property_list

        ];
        $save=Codes::create($codesData);
        if ($save){
            return response()->json([
                'status' => 1,
                'message'=>'Data Saved Successfully'
                
            ]);
        }
        /*
        */
    }
    public function getall()
    {
        $codes = Employee::all();
        return response()->json([
            'status' => 200,
            'codes' => $codes
        ]);
    }
    public function edit($id)
    {
        $codes = Codes::find($id);
        if ($codes) {
            return response()->json([
                'status' => 200,
                'employee' => $codes
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Code not found'
            ]);
        }
    }
    public function update(Request $request)
    {
        $codes = Codes::find($request->id);
        if ($codes) {
            $codes->code_type = $request->code_type;
            $codes->code = $request->code;
            $codes->detailed_description = $request->detailed_description;
            $codes->alternate_code = $request->alternate_code;
            $codes->active = $request->active;
            $codes->team = $request->team;
            $codes->property_list = $request->property_list;
            $codes->save();
            return response()->json([
                'status' => 200,
                'message' => 'Codes updated successfully'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Codes not found'
            ]);
        }
    }
    public function delete(Request $request)
{
    $codes = Codes::find($request->id);
    if ($codes && $codes->delete()) {
        return response()->json(['status' => 200, 'message' => 'Codes deleted successfully.']);
    } else {
        return response()->json(['status' => 400, 'message' => 'Failed to delete Codes.']);
    }
}
}
