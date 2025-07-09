<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemDetail extends Model
{
    use HasFactory;

    // Define the table if it's not the plural form of the model name
    protected $table = 'item_details';

    // Specify which attributes are mass assignable
    // Fillable strategy is generally safer
    protected $fillable = [
        'item',
        'rate',
        'quantity',
        'unit',
        'erd', // If using predefined columns
        // If using predefined columns
        'dimensions', 
        'grand_total',      // If using a JSON column
    ];

    // If using a JSON column, cast it to an array/object
    protected $casts = [
        'dimensions' => 'array',
    ];
}