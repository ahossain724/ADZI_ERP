<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerOrder extends Model
{
    protected $table = 'customer_orders';
    protected $primaryKey = 'id';
     protected $fillable = [
          'order_number',
          'customer_po',
          'date',
          'customer_po_date',
          'customer_number',
          'reference',
          'header_message',
          'footer_message',
          'notes',
          'project',
          'print_tax',
          'quote_by',
          'team',
          'division',
          'currency',
          'payment_confirmation',
          'periods',
          'invoicing_rule',
          'partial_delivery',
          'restrict_dos',
          'section',
          'exchange_rate',
          'location_of_installation',
          'issue_date',
          'rbo',
          'brand',
        ];
     use HasFactory;
}
