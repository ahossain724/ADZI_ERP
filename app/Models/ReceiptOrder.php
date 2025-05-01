<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReceiptOrder extends Model
{
    protected $table = 'receipt_orders';
    protected $primaryKey = 'id';
     protected $fillable = [
          'transfer_order_number',
          'order_number',
          'to_warehouse',
          'order_date',
          'reference',
          'to_division',
          'to_section',
          'to_project',
          'header_message',
          'footer_message',
          'notes',
          'team',
          'location',
          'customer_number',
          'team_member',
          'supplier_number',
        ];
     use HasFactory;
}
