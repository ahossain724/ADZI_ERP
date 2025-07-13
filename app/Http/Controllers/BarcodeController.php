<?php

// app/Http/Controllers/BarcodeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Milon\Barcode\DNS1D; // For 1D barcodes (like Code 128, EAN-13)
use Milon\Barcode\DNS2D; // For 2D barcodes (like QR codes)

class BarcodeController extends Controller
{
    public function showBarcode($number_from_route) // Renamed parameter to avoid confusion
    {
        // Hardcode the number for testing, overriding the route parameter
        $number = 100; // This is the number that will be used for the barcode

        // Example for 1D barcode (e.g., Code 128)
        try {
            $barcode1D = DNS1D::get('C128', $number);
        } catch (\Exception $e) {
            \Log::error("Barcode generation failed for number: $number - " . $e->getMessage());
            $barcode1D = null;
        }

        // Example for 2D barcode (e.g., QR Code)
        try {
            $barcode2D = DNS2D::get('QRCODE', $number);
        } catch (\Exception $e) {
            \Log::error("QR Code generation failed for number: $number - " . $e->getMessage());
            $barcode2D = null;
        }

        // Pass the hardcoded $number to the view
        return view('orderprocessing.itemprint', compact('barcode1D', 'barcode2D', 'number'));
    }
}