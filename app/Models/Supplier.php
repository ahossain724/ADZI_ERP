<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    protected $table = 'supplier';
    protected $primaryKey = 'id';
     protected $fillable = [
          'supplier_number',
          'address',
          'state_province',
          'salutation',
          'last_name',
          'phone',
          'url',
          'control_account_ap',
          'supplier_type',
          'tax_scope',
          'credit_available',
          'agent',
          'location',
          'permit_approval',
          'time_slot',
          'payment_instructions',
          'short_name',
          'address2',
          'zip_postal_code',
          'first_name',
          'title',
          'mobile_phone_number',
          'control_account_git',
          'price_group',
          'supplier_status',
          'credit_terms',
          'commission_percent',
          'bin',
          'buyer',
          'name',
          'city',
          'country',
          'middle_name',
          'email',
          'fax',
          'tax_number',
          'supplier_group',
          'sic_code',
          'credit_limit',
          'discount_percent',
          'currency',
          'expiration_date',
          'delivery_zone',
        ];
     use HasFactory;
}
