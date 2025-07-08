<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemDetail;
use Illuminate\Support\Facades\DB; // For transactions

class ItemDetailController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function storedetails(Request $request)
    {
        // 1. Basic Validation (Laravel's validation is powerful)
        $validatedData = $request->validate([
            '*.item' => 'required|string|max:255',
            '*.rate' => 'required|numeric',
            '*.quantity' => 'required|integer|min:1',
            '*.unit' => 'required|string|max:50',
            // If using predefined dimension columns:
            '*.erd' => 'nullable|string|max:255',
            '*.dimension_width' => 'nullable|string|max:255',
            '*.dimension_height' => 'nullable|string|max:255',
            // If using a JSON dimension column:
            '*.dimensions' => 'nullable|array', // Expecting an array if it's dynamic key-value pairs
        ]);

        try {
            DB::beginTransaction(); // Start a database transaction

            foreach ($validatedData as $itemData) {
                // Prepare data for insertion based on your chosen dimension strategy

                $dataToSave = [
                    'item' => $itemData['item'],
                    'rate' => $itemData['rate'],
                    'quantity' => $itemData['quantity'],
                    'unit' => $itemData['unit'],
                    'erd' => $itemData['erd'],
                ];

                // OPTION 1: Handling predefined dimension columns
                if (isset($itemData['dimension_length'])) {
                    $dataToSave['dimension_length'] = $itemData['dimension_length'];
                }
                if (isset($itemData['dimension_width'])) {
                    $dataToSave['dimension_width'] = $itemData['dimension_width'];
                }
                if (isset($itemData['dimension_height'])) {
                    $dataToSave['dimension_height'] = $itemData['dimension_height'];
                }
                // ... add other predefined dimensions

                // OPTION 2: Handling a JSON dimension column
                if (isset($itemData['dimensions'])) {
                    $dataToSave['dimensions'] = json_encode($itemData['dimensions']); // Laravel will cast this back to array if defined in model
                }


                ItemDetail::create($dataToSave);
            }

            DB::commit(); // Commit the transaction
            return response()->json(['success' => true, 'message' => 'Item details saved successfully!'], 201); // 201 Created
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback on error
            return response()->json(['success' => false, 'message' => 'Failed to save item details: ' . $e->getMessage()], 500); // 500 Internal Server Error
        }
    }
}