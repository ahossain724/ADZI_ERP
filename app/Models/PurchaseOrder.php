<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PurchaseOrder extends Model
{protected $table = 'purchase_orders';
    protected $primaryKey = 'id';
     protected $fillable = [
          'po_number',
          'reference',
          'warehouse',
          'supplier_code',
          'currency',
          'date',
          'purchase_type',
          'discount_account',
          'notes',
          'terms_and_conditions',
          'pi_no_to',
          'pi_date',
        ];
    use HasFactory;
}
