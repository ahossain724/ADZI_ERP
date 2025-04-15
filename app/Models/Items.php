<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Items extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'id';
     protected $fillable = [
          'item_code',
          'description',
          'long_description',
          'links',
          'notes',
          'stock_type',
          'barcode',
          'alias',
          'warehouse',
          'issue_unit',
          'conv_factor_issue',
          'item_group',
          'price_category',
          'grade',
          'division',
          'net_weight_per_unit',
          'minimum_order_qty',
          'yield_percent',
          'lead_time_fixed',
          'superceded_by',
          'part_no',
          'length',
          'brand',
          'minimum_price',
          'effectivity_date',
          'bin_locations',
          'stocking_unit',
          'packing_unit',
          'conv_factor_packing',
          'tax_category',
          'import_duty',
          'supplier_number',
          'unit_of_weight',
          'minimum_order_value',
          'demand_time_fence',
          'lead_time_variable',
          'supercedes',
          'hs_code',
          'width',
          'standard_cost',
          'multiplier_selling',
          'expiration_date',
          'team',
          'alternative_unit',
          'statistical_unit',
          'conv_factor_statistical',
          'item_category',
          'support_category',
          'country_of_origin',
          'weight_per_unit',
          'shelf_life',
          'order_multiple',
          'planning_time_fence',
          'lead_time_transport',
          'supercession_code',
          'unit_of_length',
          'height',
          'standard_price',
          'multiplier_purchasing',
          'strip',
        ];
    use HasFactory;
}
