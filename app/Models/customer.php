<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id';
    protected $fillable = [
          'customer_number',
          'address',
          'state_province',
          'last_name',
          'phone',
          'url',
          'control_account_ar',
          'price_group',
          'industry_segment',
          'comission_percent',
          'credit_limit',
          'credit_terms',
          'expiration_date',
          'date_of_financial_statement',
          'bin',
          'points_ob',
          'short_name',
          'address2',
          'zip_postal_code',
          'first_name',
          'title',
          'mobile_phone_number',
          'customer_group',
          'sic_code',
          'discount_percent',
          'billing_address',
          'average_payment_days',
          'credit_available',
          'date_of_credit_application',
          'date_incorporated',
          'payment_instructions',
          'remarks',
          'backorder_type',
          'name',
          'city',
          'country',
          'middle_name',
          'email',
          'fax',
          'tax_number',
          'customer_type',
          'tax_scope',
          'agent',
          'customer_status',
          'credit_rating',
          'date_approved',
          'date_of_credit_evaluation',
          'payment_method',
      ];
      use HasFactory;
}