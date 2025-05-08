<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Receipt extends Model
{
    protected $table = 'receipts';
    protected $primaryKey = 'id';
     protected $fillable = [
          'voucher_number',
          'bank',
          'ref_number',
          'ref_date',
          'customer_payer',
          'ledger',
          'narration',
          'date',
          'invoice_number',
          'taxable',
          'currency',
          'amount_received',
          'year',
          'period',
        ];
     use HasFactory;
}