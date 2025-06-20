<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Quotations extends Model
{
    protected $table = 'quotations';
    protected $primaryKey = 'id';
     protected $fillable = [
          'quotation_number',
          'deadline',
          'project',
          'quotation_deadline',
          'date',
          'currency',
          'division',
          'customer_enquiry',
          'validity',
          'customer_number',
          'exchange_rate',
          'section',
          'customer_enquiry_date',
          'invoicing_rule',
          'header_message',
          'footer_message',
          'notes',
          'partial_delivery',
          'quote_by',
          'team',
          'location',
          'delivery',
          'payment_confirmation',
          'team_member',
          'start_date',
          'print_tax',
          'department',
          'location_of_installation',
          'international_commercial_terms',
          'brand',
          'rbo',
        ];
     use HasFactory;
}
