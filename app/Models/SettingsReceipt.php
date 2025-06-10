<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class SettingsReceipt extends Model
{
     protected $table = 'settings_receipts';
    protected $primaryKey = 'id';
     protected $fillable = [
          'paymentcode',
          'account',
          'transactioncode',
        ];
     use HasFactory;
}
