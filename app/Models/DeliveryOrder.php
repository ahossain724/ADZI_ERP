<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DeliveryOrder extends Model
{protected $table = 'delivery_orders';
    protected $primaryKey = 'id';
     protected $fillable = [
          'delivery_order_number',
          'date',
          'header_message',
          'footer_message',
          'notes',
          'vehicle_type',
          'vat_challan',
          'total_net_weight',
          'vehicle',
          'vat_challan_date',
          'total_gross_weight',
          'team',
          'team_member',
          'driver_responsible_person',
          'time',
          'total_cartons',
        ];
    use HasFactory;
}
