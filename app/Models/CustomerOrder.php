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
          'rbo',
          'customer_name',
          'brand',
          'project',
          'references',
          'date',
          'customer_po_date',
          'header_message',
          'footer_message',
          'notes',
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
        ];
     use HasFactory;
}
