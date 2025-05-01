<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Invoice extends Model
{
    protected $table = 'invoices';
    protected $primaryKey = 'id';
     protected $fillable = [
          'invoice_number',
          'date',
          'flag',
          'notes',
        ];
    use HasFactory;
}
