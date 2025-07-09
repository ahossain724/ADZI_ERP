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
    // 1. Validation
   $validatedData = $request->validate([
    'items' => 'required|array|min:1',
    'items.*.item' => 'required|string|max:255',
    'items.*.rate' => 'required|numeric',
    'items.*.quantity' => 'required|integer|min:1',
    'items.*.unit' => 'required|string|max:50',
    'items.*.erd' => 'nullable|string|max:255',
    'items.*.dimensions' => 'nullable|array',
    'items.*.dimensions.*' => 'nullable|string|max:255',
    'grand_total' => 'required|numeric',
]);

    try {
        DB::beginTransaction();

        // Save grand_total separately if needed
        $grandTotal = $validatedData['grand_total'];
        // You can store $grandTotal in a parent table here if applicable

        foreach ($validatedData['items'] as $itemData) {
    $dataToSave = [
        'item' => $itemData['item'],
        'rate' => $itemData['rate'],
        'quantity' => $itemData['quantity'],
        'unit' => $itemData['unit'],
        'erd' => $itemData['erd'],
        'grand_total' => $validatedData['grand_total'],
    ];

    if (isset($itemData['dimensions'])) {
        $dataToSave['dimensions'] = $itemData['dimensions']; // Don't json_encode if casted in model
    }

    ItemDetail::create($dataToSave);
}

        DB::commit();
        return response()->json(['success' => true, 'message' => 'Item details saved successfully!'], 201);
    } catch (\Exception $e) {
        DB::rollBack();
        return response()->json(['success' => false, 'message' => 'Failed to save item details: ' . $e->getMessage()], 500);
    }
}
}