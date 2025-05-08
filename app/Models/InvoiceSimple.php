<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class InvoiceSimple extends Model
{
    protected $table = 'invoice_simples';
    protected $primaryKey = 'id';
     protected $fillable = [
          'voucher_number',
          'control',
          'sales',
          'customer_payer',
          'narration',
          'division',
          'section',
          'project',
          'date',
          'invoice_number',
          'tax_rate',
          'currency',
          'amount_received',
          'year',
          'period',
        ];
     use HasFactory;
}